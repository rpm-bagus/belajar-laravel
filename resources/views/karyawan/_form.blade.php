<div class="form-group">
    <label class="col-md-2 control-label" for="FirstName">First Name</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{ isset($employee->FirstName) ? $employee->FirstName : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="LastName">Last Name</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="LastName" name="LastName" value="{{ isset($employee->LastName) ? $employee->LastName : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Title">Title</label>
    <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Vice President, Sales" id="Title" name="Title" value="{{ isset($employee->Title) ? $employee->Title : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="TitleOfCourtesy">Title of Courtesy</label>
    <div class="col-md-2">
        <input type="text" class="form-control" placeholder="Mr./Mrs./Dr./Ms." id="TitleOfCourtesy" name="TitleOfCourtesy" value="{{ isset($employee->TitleOfCourtesy) ? $employee->TitleOfCourtesy : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="BirthDate">Birth Date</label>
    <div class="col-md-2">
        <div class='input-group date' id='dtPicker1'>
            <input type='text' class="date-picker form-control"  data-date-format="yyyy-mm-dd" id="BirthDate" name="BirthDate" value="{{ isset($employee->BirthDate) ? $employee->BirthDate : '' }}">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    <!--
      <input type="text" class="form-control" placeholder="yyyy-mm-dd 00:00:00" id="BirthDate" name="BirthDate" value="{{ isset($employee->BirthDate) ? $employee->BirthDate : '' }}">
    -->
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="HireDate">Hire Date</label>
    <div class="col-md-2">
        <div class='input-group date' id='dtPicker2'>
            <input type='text' class="date-picker form-control" data-date-format="yyyy-mm-dd" id="HireDate" name="HireDate" value="{{ isset($employee->HireDate) ? $employee->HireDate : '' }}">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    <!--
      <input type="text" class="form-control" placeholder="yyyy-mm-dd 00:00:00" id="HireDate" name="HireDate" value="{{ isset($employee->HireDate) ? $employee->HireDate : '' }}">
    -->
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Address">Address</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Address" name="Address" value="{{ isset($employee->Address) ? $employee->Address : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="City">City</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="City" name="City" value="{{ isset($employee->City) ? $employee->City : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Region">Region</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="Region" name="Region" value="{{ isset($employee->Region) ? $employee->Region : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="PostalCode">Postal Code</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="PostalCode" name="PostalCode" value="{{ isset($employee->PostalCode) ? $employee->PostalCode : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Country">Country</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="Country" name="Country" value="{{ isset($employee->Country) ? $employee->Country : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="HomePhone">Home Phone</label>
    <div class="col-md-2">
        <input type="text" class="form-control" placeholder="(206) 555-9857" id="HomePhone" name="HomePhone" value="{{ isset($employee->HomePhone) ? $employee->HomePhone : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Extension">Extension</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="Extension" name="Extension" value="{{ isset($employee->Extension) ? $employee->Extension : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Notes">Notes</label>
    <div class="col-md-4">
        <textarea class="form-control" id="Notes" name="Notes">{{ isset($employee->Notes) ? $employee->Notes : '' }}</textarea>
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="ReportsTo">Reports To</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="ReportsTo" name="ReportsTo" value="{{ isset($employee->ReportsTo) ? $employee->ReportsTo : '' }}">
    </div>
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
