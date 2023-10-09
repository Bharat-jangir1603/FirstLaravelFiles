@php
$name = 'Eyelid Jangir';
@endphp

<script>
    // let name = @json($name);
    let name = {{Js::from($name)}}
    document.write(name)
</script>