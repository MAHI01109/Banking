<x-nav />
<div class="dh">
    <center>
        <h1>
            Withdraw form page
        </h1>
    </center>
</div>
<div class="row">
    <div class="col-md-6 offset-3">
        <form  class="df">
            <div class="row">
                <div class="col">
                    ENTER ACCOUNT NUMBER
                    <input type="text" name="an" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    ENTER PIN NUMBER
                    <input type="text" name="pin" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    ENTER AMOUNT TO Withdraw
                    <input type="text" name="am" class="form-control">
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <center><input type="submit" name="submit" class="btn btn-success" value="Withdraw"></center>
                </div>
            </div>
        </form>
        <h3>{{$msg}}</h3>
    </div>
</div>
