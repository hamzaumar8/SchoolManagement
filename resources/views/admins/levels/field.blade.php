<div class="form-group row">
    <label class="col-md-2 col-form-label" for="level_name">{{__('Level Name')}} <span
            class="text-danger">*</span></label>
    <div class="col-lg-4">
        <input type="text" class="form-control" id="level_name" name="level_name" placeholder="Enter a level name..">
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label" for="level_status">{{__('Level Status')}} <span
            class="text-danger">*</span></label>
    <div class="col-lg-4">
        <select class="form-control" id="level_status" name="level_status">
            <option>Select Level Status</option>
            <option value="1">{{__('Active')}}</option>
            <option value="0">{{__('Inactive')}}</option>
        </select>
    </div>
</div>


<div class="form-group row">
    <div class="col-lg-8 ml-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>