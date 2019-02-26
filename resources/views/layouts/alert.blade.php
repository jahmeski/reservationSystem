<div class="col-xs-12">
    @if(count($errors))
    <div class="alert alert-danger">
        <ul style="margin-bottom: 0">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif 
    @if(session('message'))
    <div class='alert alert-success alert-dismissable'>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{ session('message')
        }}
    </div>
    @endif
</div>

<script type="text/javascript">
    window.setTimeout(function() { $(".alert-success").slideUp(500); }, 2000);
</script>