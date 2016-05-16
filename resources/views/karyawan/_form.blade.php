<div class="form-group {{$errors->has('FirstName') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="FirstName">First Name</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{ old('FirstName') ? old('FirstName') : (isset($employee->FirstName) ? $employee->FirstName : '') }}">
    </div>
    <?php echo $errors->first('FirstName', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('LastName') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="LastName">Last Name</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="LastName" name="LastName" value="{{ old('LastName') ? old('LastName') : (isset($employee->LastName) ? $employee->LastName : '') }}">
    </div>
    <?php echo $errors->first('LastName', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('Title') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="Title">Title</label>
    <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Vice President, Sales" id="Title" name="Title" value="{{ old('Title') ? old('Title') : (isset($employee->Title) ? $employee->Title : '') }}">
        <?php echo $errors->first('Title', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>
<div class="form-group {{$errors->has('TitleOfCourtesy') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="TitleOfCourtesy">Title of Courtesy</label>
    <div class="col-md-2">
        <input type="text" class="form-control" placeholder="Mr./Mrs./Dr./Ms." id="TitleOfCourtesy" name="TitleOfCourtesy" value="{{ old('TitleOfCourtesy') ? old('TitleOfCourtesy') : (isset($employee->TitleOfCourtesy) ? $employee->TitleOfCourtesy : '') }}">
    </div>
    <?php echo $errors->first('TitleOfCourtesy', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('BirthDate') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="BirthDate">Birth Date</label>
    <div class="col-md-2">
        <div class='input-group date' id='dtPicker1'>
            <input type='text' class="date-picker form-control"  data-date-format="yyyy-mm-dd" id="BirthDate" name="BirthDate" value="{{ old('BirthDate') ? old('BirthDate') : (isset($employee->BirthDate) ? $employee->BirthDate : '') }}">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    <!--
      <input type="text" class="form-control" placeholder="yyyy-mm-dd 00:00:00" id="BirthDate" name="BirthDate" value="{{ isset($employee->BirthDate) ? $employee->BirthDate : '' }}">
    -->
    </div>
    <?php echo $errors->first('BirthDate', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('HireDate') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="HireDate">Hire Date</label>
    <div class="col-md-2">
        <div class='input-group date' id='dtPicker2'>
            <input type='text' class="date-picker form-control" data-date-format="yyyy-mm-dd" id="HireDate" name="HireDate" value="{{ old('HireDate') ? old('HireDate') : (isset($employee->HireDate) ? $employee->HireDate : '') }}">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    <!--
      <input type="text" class="form-control" placeholder="yyyy-mm-dd 00:00:00" id="HireDate" name="HireDate" value="{{ isset($employee->HireDate) ? $employee->HireDate : '' }}">
    -->
    </div>
    <?php echo $errors->first('HireDate', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('Address') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="Address">Address</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Address" name="Address" value="{{ old('Address') ? old('Address') : (isset($employee->Address) ? $employee->Address : '') }}">
        <?php echo $errors->first('Address', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>
<div class="form-group {{$errors->has('City') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="City">City</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="City" name="City" value="{{ old('City') ? old('City') : (isset($employee->City) ? $employee->City : '') }}">
    </div>
    <?php echo $errors->first('City', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('Region') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="Region">Region</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="Region" name="Region" value="{{ old('Region') ? old('Region') : (isset($employee->Region) ? $employee->Region : '') }}">
    </div>
    <?php echo $errors->first('Region', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('PostalCode') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="PostalCode">Postal Code</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="PostalCode" name="PostalCode" value="{{ old('PostalCode') ? old('PostalCode') : (isset($employee->PostalCode) ? $employee->PostalCode : '') }}">
    </div>
    <?php echo $errors->first('PostalCode', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('Country') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="Country">Country</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="Country" name="Country" value="{{ old('Country') ? old('Country') : (isset($employee->Country) ? $employee->Country : '') }}">
    </div>
    <?php echo $errors->first('Country', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('HomePhone') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="HomePhone">Home Phone</label>
    <div class="col-md-2">
        <input type="text" class="form-control" placeholder="(206) 555-9857" id="HomePhone" name="HomePhone" value="{{ old('HomePhone') ? old('HomePhone') : (isset($employee->HomePhone) ? $employee->HomePhone : '') }}">
    </div>
    <?php echo $errors->first('HomePhone', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('Extension') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="Extension">Extension</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="Extension" name="Extension" value="{{ old('Extension') ? old('Extension') : (isset($employee->Extension) ? $employee->Extension : '') }}">
    </div>
    <?php echo $errors->first('Extension', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>
<div class="form-group {{$errors->has('Notes') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="Notes">Notes</label>
    <div class="col-md-4">
        <textarea class="form-control" id="Notes" name="Notes">{{ old('Notes') ? old('Notes') : (isset($employee->Notes) ? $employee->Notes : '') }}</textarea>
        <?php echo $errors->first('Notes', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>
<div class="form-group {{$errors->has('ReportsTo') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="ReportsTo">Reports To</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="ReportsTo" name="ReportsTo" value="{{ old('ReportsTo') ? old('ReportsTo') : (isset($employee->ReportsTo) ? $employee->ReportsTo : '') }}">
    </div>
    <?php echo $errors->first('ReportsTo', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>

<div class="form-group">
    <div class="col-md-offset-1 col-md-6">
        @if (strpos(URL::current(), 'employee/create') !== false)
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
