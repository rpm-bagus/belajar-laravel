@if (strpos(URL::current(), 'customer/create') !== false)
    <div class="form-group {{$errors->has('CustomerID') ? 'has-error has-feedback' : '' }}">
        <label class="col-md-2 control-label" for="CustomerID">Customer ID</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="CustomerID" name="CustomerID" value="{{ old('CustomerID') ? old('CustomerID') : (isset($customer->CustomerID) ? $customer->CustomerID : '') }}">
        </div>
        <?php echo $errors->first('CustomerID', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
@else

@endif

<div class="form-group {{$errors->has('CompanyName') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="CompanyName">Company Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="CompanyName" name="CompanyName" value="{{ old('CompanyName') ? old('CompanyName') : (isset($customer->CompanyName) ? $customer->CompanyName : '') }}">
        <?php echo $errors->first('CompanyName', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>
<div class="form-group {{$errors->has('ContactName') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="ContactName">Contact Person</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="ContactName" name="ContactName" value="{{ old('ContactName') ? old('ContactName') : (isset($customer->ContactName) ? $customer->ContactName : '') }}">
        <?php echo $errors->first('ContactName', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>
<div class="form-group {{$errors->has('ContactTitle') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="ContactTitle">Title</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="ContactTitle" name="ContactTitle" value="{{ old('ContactTitle') ? old('ContactTitle') : (isset($customer->ContactTitle) ? $customer->ContactTitle : '') }}">
        <?php echo $errors->first('ContactTitle', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>
<div class="form-group {{$errors->has('Address') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="Address">Address</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Address" name="Address" value="{{ old('Address') ? old('Address') : (isset($customer->Address) ? $customer->Address : '') }}">
        <?php echo $errors->first('Address', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>
<div class="form-group {{$errors->has('City') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="City">City</label>
    <div class="col-md-2">
      <input type="text" class="form-control" id="City" name="City" value="{{ old('City') ? old('City') : (isset($customer->City) ? $customer->City : '') }}">
    </div>
    <?php echo $errors->first('City', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('Region') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="Region">Region</label>
    <div class="col-md-2">
      <input type="text" class="form-control" id="Region" name="Region" value="{{ old('Region') ? old('Region') : (isset($customer->Region) ? $customer->Region : '') }}">
    </div>
    <?php echo $errors->first('Region', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('PostalCode') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="PostalCode">Postal Code</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="PostalCode" name="PostalCode" value="{{ old('PostalCode') ? old('PostalCode') : (isset($customer->PostalCode) ? $customer->PostalCode : '') }}">
    </div>
    <?php echo $errors->first('PostalCode', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('Country') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="Country">Country</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="Country" name="Country" value="{{ old('Country') ? old('Country') : (isset($customer->Country) ? $customer->Country : '') }}">
    </div>
    <?php echo $errors->first('Country', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('Phone') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="Phone">Phone</label>
    <div class="col-md-3">
        <input type="text" class="form-control" id="Phone" name="Phone" value="{{ old('Phone') ? old('Phone') : (isset($customer->Phone) ? $customer->Phone : '') }}">
        <?php echo $errors->first('Phone', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>
<div class="form-group {{$errors->has('Fax') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="Fax">Fax</label>
    <div class="col-md-3">
        <input type="text" class="form-control" id="Fax" name="Fax" value="{{ old('Fax') ? old('Fax') : (isset($customer->Fax) ? $customer->Fax : '') }}">
        <?php echo $errors->first('Fax', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-1 col-md-6">
        @if (strpos(URL::current(), 'customer/create') !== false)
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-floppy-disk"></span> Tambah Baru
            </button>
        @else
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-floppy-disk"></span> Simpan Perubahan
            </button>
        @endif

        <button class="btn btn-danger" onclick="goBack()">
            <span class="glyphicon glyphicon-trash"></span> Batal
        </button>
    </div>
</div>
