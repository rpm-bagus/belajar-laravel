@if (strpos(URL::current(), 'customer/create') !== false)
    <div class="form-group">
        <label class="col-md-2 control-label" for="CustomerID">Customer ID</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="CustomerID" name="CustomerID" value="{{ isset($customer->CustomerID) ? $customer->CustomerID : '' }}">
        </div>
    </div>
@else

@endif

<div class="form-group">
    <label class="col-md-2 control-label" for="CompanyName">Company Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="CompanyName" name="CompanyName" value="{{ isset($customer->CompanyName) ? $customer->CompanyName : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="ContactName">Contact Person</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="ContactName" name="ContactName" value="{{ isset($customer->ContactName) ? $customer->ContactName : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="ContactTitle">Title</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="ContactTitle" name="ContactTitle" value="{{ isset($customer->ContactTitle) ? $customer->ContactTitle : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Address">Address</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Address" name="Address" value="{{ isset($customer->Address) ? $customer->Address : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="City">City</label>
    <div class="col-md-2">
      <input type="text" class="form-control" id="City" name="City" value="{{ isset($customer->City) ? $customer->City : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Region">Region</label>
    <div class="col-md-2">
      <input type="text" class="form-control" id="Region" name="Region" value="{{ isset($customer->Region) ? $customer->Region : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="PostalCode">Postal Code</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="PostalCode" name="PostalCode" value="{{ isset($customer->PostalCode) ? $customer->PostalCode : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Country">Country</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="Country" name="Country" value="{{ isset($customer->Country) ? $customer->Country : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Phone">Phone</label>
    <div class="col-md-3">
        <input type="text" class="form-control" id="Phone" name="Phone" value="{{ isset($customer->Phone) ? $customer->Phone : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Fax">Fax</label>
    <div class="col-md-3">
        <input type="text" class="form-control" id="Fax" name="Fax" value="{{ isset($customer->Fax) ? $customer->Fax : '' }}">
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
