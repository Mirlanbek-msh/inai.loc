<?php

namespace App\Exports;

use App\Models\Event;
use App\Models\EventReply;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class EventRepliesExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->event->replies;
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        $reply = $this->event->replies->first();
        $columns = ['#'];
        if($reply->org_name) array_push($columns, trans('t.org_name'));
        if($reply->full_name) array_push($columns, trans('t.full_name'));
        if($reply->team_name) array_push($columns, trans('t.team_name'));
        if($reply->group_course) array_push($columns, trans('t.group_course'));
        if($reply->university) array_push($columns, trans('t.university'));
        if($reply->phone) array_push($columns, trans('t.phone'));
        if($reply->email) array_push($columns, 'Email');
        if($reply->created_at) array_push($columns, trans('t.time'));
        return $columns;
    }

    /**
    * @var EventReply $reply
    */
    public function map($reply): array
    {
        $columns = [$reply->id];
        if($reply->org_name) array_push($columns, $reply->org_name);
        if($reply->full_name) array_push($columns, $reply->full_name);
        if($reply->team_name) array_push($columns, $reply->team_name);
        if($reply->group_course) array_push($columns, $reply->group_course);
        if($reply->university) array_push($columns, $reply->university);
        if($reply->phone) array_push($columns, $reply->phone);
        if($reply->email) array_push($columns, $reply->email);
        if($reply->created_at) array_push($columns, $reply->created_at);
        return $columns;
    }
}
