@extends('home')
@section('content')
 <section class="pageHolder newsHolder">
    <div class="container">
        <div class="pageTitle">
            <h1>{{ $title }}</h1>
            
        </div>

        <div class="newsR"></div>

        <div class="loadMore text-center">
            <a href="" class="primaryButton"  data-id="{{ $numpage }}" title="{{ trans('admin.more') }}">{{ trans('admin.more') }}</a>
        </div>

        <ul class="infoList">
            <li class="listItem">
                <p>{{ trans('admin.newscontent') }}</p>
            </li>
        </ul>
    </div>
</section>

@section('script')  
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: 'GET',
            url: '{{ url('newscontents') }}',
            data: {page: "1" },
            success: function(data) {
                // console.log(data);
                $('.newsR').html(data);
            }

        });
    });

    $('.primaryButton').click(function(event) {
        var id = $(this).data('id');
        id = id + 1;
        $(".primaryButton").attr("data-id",id);
        $.ajax({
            type: 'GET',
            url: "{{ url('/newscontents?page=') }}"+id,
            success: function(data) {
                $('.newsR').append(data);
                
            },

        });
        return false;
    });


    
                
</script>  
@endsection
@endsection