<div class="d-flex flex-column flex-shrink-0 p-3 text-white border-start border-end border-gray-300">
    <!-- Navbar Section -->
    <div class="mb-3">
        @include('include.navbar')
    </div>
    
    <!-- Happenings Section -->
    <div class="mb-3">
        @include('include.happenings')
    </div>
    
    <!-- User Info Section -->
    <div class="row mt-auto">
        <div class="col-12 d-flex align-items-center">
            <i class="bi bi-person-circle" style="font-size: 1.5rem;"></i> <!-- Larger icon -->
            <span class="fs-6 fw-bold ms-2">Elon Musk</span>
            <i class="bi bi-patch-check-fill text-primary ms-1"></i> <!-- Icon right next to the name -->
            <p class="text-secondary mb-0 ms-2">@username</p>
            <i class="bi bi-three-dots ms-auto"></i>
        </div>
    </div>
    <div class="mx-4"> 
        This is a post
    </div>
    <div class="d-flex justify-content-between align-items-center mt-2 mx-4 text-secondary">
    <i class="bi bi-chat"> 1.2</i>
    <i class="bi bi-heart"> 1.2</i>
    <i class="bi bi-bookmark"></i>
    <i class="bi bi-share"></i>
    </div>
    <div>
    <i class="bi bi-card-image"></i>

    </div>
</div>

 
