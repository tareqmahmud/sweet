@if(session("sweet_message"))
    <script>
        swal({
            title: "{{ session()->get("sweet_message.title") }}",
            text: "{{ session()->get("sweet_message.message") }}",
            type: "{{ session()->get("sweet_message.label") }}",
            @if(session('sweet_message.autoHide'))
                timer: "{{ session()->get('sweet_message.timer') }}",
            @endif
            @if(session('sweet_message.options'))
                @foreach(session()->get('sweet_message.options') as $key => $value)
                    {{ $key }}: "{{ $value }}",
                @endforeach
            @endif
        });
    </script>
@endif
