 <!-- Sidebar -->
<div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white" id="sidebar" style="width: 250px; position: fixed; height: 100%; overflow-y: auto;">
    <p class="my-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
        </svg>
    </p>
    <i class="bi bi-search"><span class="m-2">Search</span></i>
    <i class="bi bi-bell"> <span class="m-2">Notifications</span></i>
    <i class="bi bi-envelope"> <span class="m-2">Messages</span></i>
    <i class="bi bi-bookmark"> <span class="m-2">Bookmarks</span></i>
    <i class="bi bi-briefcase"> <span class="m-2">Jobs</span></i>
    <i class="bi bi-list"><span class="m-2">Lists</span></i>
    <i class="bi bi-person"><span class="m-2">Profile</span></i>
    <i class="bi bi-three-dots"><span class="m-2">More</span></i>
    <div>
        <button class="btn btn-primary my-2" style="width: 80%; border-radius: 50px;">Post</button>
    </div>
    <div class="mt-3">
        <i class="bi bi-person-circle d-flex">
            <span class="" style="font-size: 10px; text-align: center;">
                <div>John Doe</div>
                <div>@johndoe</div>
            </span>
        </i>
    </div>
</div>

<div class="content" style="margin-left: 250px; padding: 20px;">
    <!-- Your main content goes here -->
</div>

<style>
    @media (max-width: 768px) {
        #sidebar {
            display: none; /* Hide sidebar on smaller screens */
        }

        .content {
            margin-left: 0; /* No margin for main content on small screens */
            padding: 10px; /* Add some padding for content */
            width: 100%; /* Full width for main content */
        }
    }

    /* Adjust sidebar visibility for medium and larger screens */
    @media (min-width: 769px) {
        #sidebar {
            display: flex; /* Show sidebar on md and lg screens */
        }

        .content {
            margin-left: 250px; /* Maintain space for sidebar */
        }
    }

    body {
        margin: 0;
    }
</style>
