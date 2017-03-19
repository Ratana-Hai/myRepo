@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Student</div>
                    <form class="form-horizontal">
                        <fieldset>

                        <!-- Form Name -->
                        <legend>Form Name</legend>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="fname">First Name</label>  
                          <div class="col-md-4">
                          <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="lname">Last Name</label>  
                          <div class="col-md-4">
                          <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="">
                            
                          </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="sex">SEX</label>
                          <div class="col-md-4">
                            <select id="sex" name="sex" class="form-control">
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                            </select>
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="dob">Date of Birth</label>  
                          <div class="col-md-4">
                          <input id="dob" name="dob" type="text" placeholder="Date of Birth" class="form-control input-md" required="">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="address">Address</label>  
                          <div class="col-md-4">
                          <input id="address" name="address" type="text" placeholder="Address" class="form-control input-md" required="">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="phone">Phone</label>  
                          <div class="col-md-4">
                          <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="btnDone"></label>
                          <div class="col-md-8">
                            <button id="btnDone" name="btnDone" class="btn btn-success">Done</button>
                            <button id="btnCancel" name="btnCancel" class="btn btn-primary">Cancel</button>
                          </div>
                        </div>

                        </fieldset>
                        </form>

                <div class="panel-body">
                	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection