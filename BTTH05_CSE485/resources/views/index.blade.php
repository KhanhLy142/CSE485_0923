@if (count($author) === 1)
    I have one record!
@elseif (count($author) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif

