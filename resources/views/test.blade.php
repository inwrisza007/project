<form action="{{ route('textOnImage') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="row">



        <div class="col-md-6">

            <input type="file" name="filename" class="form-control">

        </div>



        <div class="col-md-6">

            <button type="submit" class="btn btn-success">Upload</button>

        </div>



    </div>

</form>
