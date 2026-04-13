@extends('layouts.app')

@section('content')
<div class="container">
    <div id="div1-dashboard"></div>
    <div id="div2-locations"></div>
    </div>

<script>
    function loadSection(section) {
        $.ajax({
            url: '/' + section,
            success: function(data) {
                $('#div2-locations').html(data);
            }
        });
    }
</script>
@endsection
