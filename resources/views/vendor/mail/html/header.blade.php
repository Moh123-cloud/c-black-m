@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="" class="logo" alt="BlackM">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
