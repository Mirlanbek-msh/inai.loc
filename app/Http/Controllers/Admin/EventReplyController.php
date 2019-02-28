<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventReply;
use App\Exports\EventRepliesExport;
use Maatwebsite\Excel\Facades\Excel;

class EventReplyController extends Controller
{
    public function index($id)
    {
        $row = Event::findOrFail($id);
        return view('admin.event.reply.index', compact('row'));
    }

    public function show($event_id, $id)
    {
        $row = EventReply::findOrFail($id);
        if(!$row->seen){
            $row->seen = 1;
            $row->save();
        }
        $event = $row->event;
        return view('admin.event.reply.show', compact('row', 'event'));
    }

    public function destroy($event_id, $id)
    {
        EventReply::findOrFail($id)->delete();
        toast(trans('t.removed_successfully'), 'info', 'top-right');
        return redirect()->route('admin.event.reply', $event_id);
    }

    public function downloadExcel($id)
    {
        $row = Event::findOrFail($id);
        return Excel::download(new EventRepliesExport($row), str_replace(" ", "_", $row->title_lang.'_signed_up.xlsx'));
    }

    public function downloadPdf($id)
    {
        // $row = Event::findOrFail($id);
        // return Excel::download(new EventRepliesExport($row), str_replace(" ", "_", $row->title_lang.'_signed_up.pdf'), \Maatwebsite\Excel\Excel::TCPDF);
    }
}
