<tr id="sched-list-{{ $schedule->id }}">
    <td>{{ $schedule->event_name }}</td>
    <td>{{ $schedule->event_desc }}</td>
    <td>{{ $schedule->schedule }}</td>
    <td><a href="{{ route('my-schedule.edit', $schedule->id) }}" class="text-success show-modal" title="Edit {{ $schedule->event_name }}">Edit</a> | <a href="{{ route('my-schedule.destroy', $schedule->id) }}" class="text-danger show-confirm-modal"> Delete</a></td>
</tr>