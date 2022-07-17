@forelse($ticket_system as $key => $val)
<div class="ticket_system-gadget-box">
    <p>{!!@$val->name!!}</p>
    <p class="text-muted"><small><i class="ion ion-android-person"></i> {!!@$val->user->name!!} at {!! format_date($val->created_at)!!}</small></p>
</div>
@empty
<div class="ticket_system-gadget-box">
    <p>No TicketSystem</p>
</div>
@endif