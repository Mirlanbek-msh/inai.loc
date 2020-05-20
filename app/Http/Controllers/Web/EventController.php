<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventReply;
use Illuminate\Validation\Rule;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('status', 1)->orderBy('created_at', 'DESC')->paginate(10);
        return view('web.event.index', compact('events'));
    }

    public function show($slug)
    {
        $row = Event::where('slug', $slug)->firstOrFail();
        $row->increment('views');
        return view('web.event.show', compact('row'));
    }

    public function apply($slug)
    {
        $row = Event::where('slug', $slug)->firstOrFail();
        return view('web.event.apply', compact('row'));
    }

    public function applyPost(Request $request, $slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $validation_array = [
            // 'g-recaptcha-response' => 'required'
        ];

        if($event->need_org_name) $validation_array['org_name'] = 'required';
        if($event->need_full_name) $validation_array['full_name'] = 'required';
        if($event->need_university) $validation_array['university'] = 'required';
        if($event->need_group_course) $validation_array['group_course'] = 'required';
        if($event->need_team_name) $validation_array['team_name'] = 'required';
        // if($event->need_phone) $validation_array['phone'] = 'required|unique:event_replies';
        if($event->need_phone) $validation_array['phone'] = [
            "required",
            Rule::unique('event_replies', 'phone')->where(function ($query) use ($event) {
                return $query->where('event_id', $event->id);
            })
        ];
        // if($event->need_email) $validation_array['email'] = 'required|unique:event_replies';
        if($event->need_email) $validation_array['email'] = [
            "required",
            Rule::unique('event_replies', 'email')->where(function ($query) use ($event) {
                return $query->where('event_id', $event->id);
            })
        ];
        if($event->need_file) $validation_array['file'] = 'required';
        
        $request->validate($validation_array);

        $data = http_build_query(array(
            'secret' => '6LcDPYgUAAAAAN3MhbNj2r5Q1dIv7p4oE27Htkdm',
            'response' => $request->get('g-recaptcha-response'),
        ));

        $options = array(
            'http' => array(
                'method' => 'POST',
                'content' => $data,
                'header' => 'Content-type: application/x-www-form-urlencoded',
            )
        );

        $context = stream_context_create($options);
        $result = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
        $response = json_decode($result);

        if($response->success)
        {
            $row = EventReply::create($request->all());
            $row->event_id = $event->id;
            // $question->sendExpertEmails();
            // dd($request->all());

            if($request->hasFile('file')){
                $file = $request->file('file');
                $dir  = 'uploads/events/'.$event->id.'/replies/'.$row->id.'/';
                if (!file_exists($dir)) {
                    mkdir($dir, 0777, true);
                }
                $file_name = 'file.'.$file->getClientOriginalExtension();
                $file->move($dir, $file_name);
                $row->file = $dir.$file_name;
            }
            
            $row->save();
            toast(trans('t.registered_successfully'),'success','top-right');
            return redirect()->route('web.event.show', $event->slug);
        }
        else 
        {
            // toast(trans('t.you_are_robot'),'error','top-right');
            return redirect()->back()->withErrors(['captcha' => trans('t.you_are_robot')]);
        }
    }
}
