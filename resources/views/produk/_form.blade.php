<div class="form-group {{$errors->has('ProductName') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="ProductName">Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="ProductName" name="ProductName" value="{{ old('ProductName') ? old('ProductName') : (isset($product->ProductName) ? $product->ProductName : '') }}">
        <?php echo $errors->first('ProductName', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label" for="Category">Category</label>
    <div class="col-md-2">
        <select class="form-control" id="Category" name="CategoryID">
            @foreach($categories as $category)
                <option value="{{ $category->CategoryID }}" {{ isset($product) && ($category->CategoryID == $product->CategoryID) ? 'selected' : '' }}>{{ $category->CategoryName }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label" for="Supplier">Supplier</label>
    <div class="col-md-3">
        <select class="form-control" id="Supplier" name="SupplierID">
            @foreach($suppliers as $supplier)
                <option value="{{ $supplier->SupplierID }}" {{ isset($product) && ($supplier->SupplierID == $product->SupplierID) ? 'selected' : '' }}>PT. {{ $supplier->CompanyName }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group {{$errors->has('UnitPrice') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="UnitPrice">Unit Price</label>
    <div class="col-md-2">
        <div class="input-group">
            <span class="input-group-addon">$</span>
            <input type="text" class="form-control text-right" id="UnitPrice" name="UnitPrice" value="{{ old('UnitPrice') ? old('UnitPrice') : (isset($product->UnitPrice) ? $product->UnitPrice : '') }}">    
        </div>
    </div>
    <?php echo $errors->first('UnitPrice', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>

<div class="form-group {{$errors->has('QuantityPerUnit') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="QuantityPerUnit">Quantity Per Unit</label>
    <div class="col-md-2">
        <div class="input-group">
            <input type="text" class="form-control text-right" id="QuantityPerUnit" name="QuantityPerUnit" value="{{ old('QuantityPerUnit') ? old('QuantityPerUnit') : (isset($product->QuantityPerUnit) ? $product->QuantityPerUnit : '') }}">
            <span class="input-group-addon">pcs</span>
        </div>
    </div>
    <?php echo $errors->first('QuantityPerUnit', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>

<div class="form-group {{$errors->has('UnitsInStock') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="UnitsInStock">Units In Stock</label>
    <div class="col-md-2">
        <div class="input-group">
            <input type="text" class="form-control text-right" id="UnitsInStock" name="UnitsInStock" value="{{ old('UnitsInStock') ? old('UnitsInStock') : (isset($product->UnitsInStock) ? $product->UnitsInStock : '') }}">
            <span class="input-group-addon">pcs</span>
        </div>
    </div>
    <?php echo $errors->first('UnitsInStock', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>

<div class="form-group {{$errors->has('UnitsOnOrder') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="UnitsOnOrder">Units On Order</label>
    <div class="col-md-2">
        <div class="input-group">
            <input type="text" class="form-control text-right" id="UnitsOnOrder" name="UnitsOnOrder" value="{{ old('UnitsOnOrder') ? old('UnitsOnOrder') : (isset($product->UnitsOnOrder) ? $product->UnitsOnOrder : '') }}">
            <span class="input-group-addon">pcs</span>
        </div>
    </div>
    <?php echo $errors->first('UnitsOnOrder', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>

<div class="form-group {{$errors->has('ReorderLevel') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="ReorderLevel">Reorder Level</label>
    <div class="col-md-2">
        <div class="input-group">
            <input type="text" class="form-control text-right" id="ReorderLevel" name="ReorderLevel" value="{{ old('ReorderLevel') ? old('ReorderLevel') : (isset($product->ReorderLevel) ? $product->ReorderLevel : '') }}">
            <span class="input-group-addon">pcs</span>
        </div>
    </div>
    <?php echo $errors->first('ReorderLevel', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-3">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="Discontinued" {{ (isset($product->Discontinued) && ($product->Discontinued)) ? 'checked' : '' }}> Discontinued
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-6">
        @if (strpos(URL::current(), 'product/create') !== false)
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
