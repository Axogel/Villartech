<div class="rounded border p-10">

    <div class="image-input image-input-outline" data-kt-image-input="true"
       style="background-image: url( '{{ asset('images/avatars/blank.png') }}' )">
 
       <div class="image-input-wrapper w-125px h-125px"></div>
    <div class="image-input image-input-empty" data-kt-image-input="true"
       style="background-image: url( '{{ asset('images/avatars/blank.png') }}' )">
 
       <div class="image-input-wrapper w-125px h-125px"></div>
    
       <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
          data-kt-image-input-action="change"
          data-bs-toggle="tooltip"
          data-bs-dismiss="click"
          title="Actualizar imagen">
    
          <i class="bi bi-pencil-fill fs-7"></i>
    
          <input type="file" accept=".png, .jpg, .jpeg">
          <input type="hidden">
    
       </label>
    
       <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
          data-kt-image-input-action="cancel"
          data-bs-toggle="tooltip"
          data-bs-dismiss="click"
          title="Remover imagen">
          <i class="bi bi-x fs-2"></i>
       </span>
    
       <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
          data-kt-image-input-action="remove"
          data-bs-toggle="tooltip"
          data-bs-dismiss="click"
          title="Remover imagen">
          <i class="bi bi-x fs-2"></i>
       </span>
    
    </div>
 </div>