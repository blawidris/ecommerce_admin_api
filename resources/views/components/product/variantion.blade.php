 <div data-repeater-item class="form-group d-flex flex-wrap align-items-center gap-5">
     <!--begin::Select2-->
     <div class="w-100 w-md-200px">
         <select class="form-select" name="product_option" data-placeholder="Select a variation"
             data-kt-ecommerce-catalog-add-product="product_option">
             <option></option>
             <option value="color" {{ $item->product_option == 'color' ? 'selected' : '' }}>Color</option>
             <option value="size" {{ $item->product_option == 'size' ? 'selected' : '' }}>Size</option>
             <option value="material" {{ $item->product_option == 'material' ? 'selected' : '' }}>Material</option>
             <option value="style" {{ $item->product_option == 'style' ? 'selected' : '' }}>Style</option>
         </select>
     </div>
     <!--end::Select2-->

     <!--begin::Input-->
     <input type="text" class="form-control mw-100 w-200px" name="product_option_value" placeholder="Variation"
         value="{{ $item->product_option_value ?? '' }}" />
     <!--end::Input-->

     <button type="button" data-repeater-delete class="btn btn-sm btn-icon btn-light-danger">
         <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i> </button>
 </div>
