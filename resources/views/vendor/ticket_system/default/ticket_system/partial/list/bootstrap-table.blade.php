            <table class="table" id="main-table" data-url="{!!guard_url('ticket_system/ticket_system?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="bus_id">{!! trans('ticket_system::ticket_system.label.bus_id')!!}</th>
                    <th data-field="journey_date">{!! trans('ticket_system::ticket_system.label.journey_date')!!}</th>
                    <th data-field="ticket_seats">{!! trans('ticket_system::ticket_system.label.ticket_seats')!!}</th>
                    <th data-field="user_id">{!! trans('ticket_system::ticket_system.label.user_id')!!}</th>
                    <th data-field="user_type">{!! trans('ticket_system::ticket_system.label.user_type')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">Actions</th>
                    </tr>
                </thead>
            </table>