<x-nav />
<div class="container-fluid CREATE">
    <div class="row">
        <center>
            <h1 class="C-heading">CREATE NEW ACCOUNT</h1>
        </center>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3">
            <form class="form1">
                <div class="row">
                    <div class="col">
                        ENTER PIN
                        <input type="text" name="p" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        ENTER NAME
                        <input type="text" name="n" class="form-control">
                    </div>
                    <div class="col">
                        ENTER F'NAME
                        <input type="text" name="fn" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        ENTER email
                        <input type="text" name="e" class="form-control">
                    </div>
                    <div class="col">
                        ENTER PHONE
                        <input type="text" name="ph" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        ENTER GENDER
                        <input type="text" name="g" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        ENTER COUNTRY
                        <input type="text" name="c" class="form-control">
                    </div>
                    <div class="col">
                        ENTER STATE
                        <input type="text" name="s" class="form-control">
                    </div>
                    <div class="col">
                        ENTER CITY
                        <input type="text" name="ct" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        ENTER AMOUNT
                        <input type="text" name="am" class="form-control">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col">
                        <center> <input type="submit" name="submit" class="btn btn-success"></center>
                    </div>
                </div>
            </form>
            <br>
            <h3>{{$msg}}</h3>
        </div>
    </div>
</div>
