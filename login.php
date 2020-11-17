<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="EJXGmEIJL4cmfltwETpa6EQHv0nxhKMKfoVXCtkK">

        <title>testLaravel2</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/admin-lte.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

        <!-- Livewire Styles -->
<style>
    [wire\:loading], [wire\:loading\.delay] {
        display: none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
    }

    @keyframes livewireautofill { from {} }
</style>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>

                     <li class="nav-item d-none d-sm-inline-block">
    <a class="nav-link" href="http://curly-kangaroo-56.loca.lt/dashboard">
        Dashboard
    </a>
</li> 
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                                             <li class="nav-item dropdown user-menu">
    <a id="navbarDropdown" href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
        <img class="user-image img-circle elevation-2" width="32" height="32" src="https://ui-avatars.com/api/?name=saya&amp;color=7F9CF5&amp;background=EBF4FF" alt="saya" />
                                                                <span class="d-none d-md-inline">saya</span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <!-- Account Management -->
                                <h6 class="dropdown-header">
                                    Manage Account
                                </h6>

                                 <a class="dropdown-item px-4" href="http://curly-kangaroo-56.loca.lt/user/profile">Profile</a>
 

                                
                            <!-- Team Management -->
                                
                                    <hr class="dropdown-divider">

                                    <h6 class="dropdown-header">
                                        Manage Team
                                    </h6>

                                    <!-- Team Settings -->
                                     <a class="dropdown-item px-4" href="http://curly-kangaroo-56.loca.lt/teams/2">Team Settings</a>
 

                                                                             <a class="dropdown-item px-4" href="http://curly-kangaroo-56.loca.lt/teams/create">Create New Team</a>
 
                                    
                                    <hr class="dropdown-divider">

                                    <!-- Team Switcher -->
                                    <h6 class="dropdown-header">
                                        Switch Teams
                                    </h6>

                                                                             <a class="dropdown-item px-4" href="#" onclick="event.preventDefault();
                                                 document.getElementById(&#039;switch-team-form-2&#039;).submit();"><div class="d-flex align-content-center">
                    <svg class="mr-1 text-success" width="20" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        
        <div>saya&#039;s Team</div>
    </div>

    <form method="POST" action="http://curly-kangaroo-56.loca.lt/current-team" id="switch-team-form-2">
        <input type="hidden" name="_method" value="PUT">        <input type="hidden" name="_token" value="EJXGmEIJL4cmfltwETpa6EQHv0nxhKMKfoVXCtkK">
        <!-- Hidden Team ID -->
        <input type="hidden" name="team_id" value="2">
    </form></a>
  


 
                                                                    
                                <hr class="dropdown-divider">

                                <!-- Authentication -->
                                 <a class="dropdown-item px-4" href="http://curly-kangaroo-56.loca.lt/logout" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">Logout</a>
 
                                <form method="POST" id="logout-form" action="http://curly-kangaroo-56.loca.lt/logout">
                                    <input type="hidden" name="_token" value="EJXGmEIJL4cmfltwETpa6EQHv0nxhKMKfoVXCtkK">                                </form>
    </div>
</li>
 
                                    </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-warning elevation-2">
                <!-- Brand Logo -->
                <a href="/" class="brand-link">
                     <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" width="36" class="brand-image img-circle elevation-3" style="opacity: .8">
  <path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#6875F5"/>
  <path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#6875F5"/>
</svg>
 
                    <span class="brand-text font-weight-light">testLaravel2</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                                    <div class="image">
                                <img src="https://ui-avatars.com/api/?name=saya&amp;color=7F9CF5&amp;background=EBF4FF" class="img-circle elevation-2" alt="saya">
                            </div>
                                                <div class="info">
                            <a href="http://curly-kangaroo-56.loca.lt/user/profile" class="d-block">saya</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col">
                                <h1><h2 class="h4 font-weight-bold">
            Profile
        </h2></h1>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div wire:id="rWm5lDctVwr3ax4AIYrE" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;rWm5lDctVwr3ax4AIYrE&quot;,&quot;name&quot;:&quot;profile.update-profile-information-form&quot;,&quot;locale&quot;:&quot;en&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;fec892a2&quot;,&quot;data&quot;:{&quot;state&quot;:{&quot;id&quot;:2,&quot;name&quot;:&quot;saya&quot;,&quot;email&quot;:&quot;saya@gmail.com&quot;,&quot;email_verified_at&quot;:null,&quot;current_team_id&quot;:2,&quot;profile_photo_path&quot;:null,&quot;created_at&quot;:&quot;2020-11-11T03:09:45.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-11-11T03:09:47.000000Z&quot;,&quot;profile_photo_url&quot;:&quot;https:\/\/ui-avatars.com\/api\/?name=saya&amp;color=7F9CF5&amp;background=EBF4FF&quot;},&quot;photo&quot;:null},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;6e2f2c2d7437baa59ad94b18551ef8f3121974b0986915dd737a86008a48ecb2&quot;}}" class="row">
    <div class="col-md-4">
         <div class="px-4 px-sm-0">
    <h3 class="h5">Profile Information</h3>

    <p class="mt-1 text-muted">
        Update your account&#039;s profile information and email address.
    </p>
</div>
 
    </div>
    <div class="col-md-8">
        <div class="card shadow-sm">
            <form wire:submit.prevent="updateProfileInformation">
                <div class="card-body">
                <!-- Profile Photo -->
                    <div class="form-group" x-data="{photoName: null, photoPreview: null}">
                <!-- Profile Photo File Input -->
                <input type="file" hidden
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                 <label for="photo">
    Photo
</label>
 

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="https://ui-avatars.com/api/?name=saya&amp;color=7F9CF5&amp;background=EBF4FF" class="rounded-circle" height="80px" width="80px">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <img x-bind:src="photoPreview" class="rounded-circle" width="80px" height="80px">
                </div>

                 <button type="button" class="btn btn-outline-secondary mt-2 mr-2" x-on:click.prevent="$refs.photo.click()">
    Select A New Photo
</button>
 
				
				
                  
            </div>
        
        <div class="w-75">
            <!-- Name -->
            <div class="form-group">
                 <label for="name">
    Name
</label>
 
                 <input  class="form-control" id="name" type="text" wire:model.defer="state.name" autocomplete="name">
 
                  
            </div>

            <!-- Email -->
            <div class="form-group">
                 <label for="email">
    Email
</label>
 
                 <input  class="form-control" id="email" type="email" wire:model.defer="state.email">
 
                  
            </div>
        </div>
                </div>

                                    <div class="card-footer d-flex justify-content-end">
                        <div class="d-flex align-items-baseline">
			 <div x-data="{ shown: false, timeout: null }"
    x-init="window.livewire.find('rWm5lDctVwr3ax4AIYrE').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
    x-show.transition.opacity.out.duration.1500ms="shown"
    style="display: none;"
    class="small mr-3">
    Saved.
</div>
 

			 <button type="submit" class="btn btn-dark">
    Save
</button>
 
		</div>
                    </div>
                            </form>
        </div>
    </div>
</div>
 
         <div class="py-3">
    <hr />
</div>
 
    
            <div wire:id="CuPNjDiGCv1vZGfcnnK7" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;CuPNjDiGCv1vZGfcnnK7&quot;,&quot;name&quot;:&quot;profile.update-password-form&quot;,&quot;locale&quot;:&quot;en&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;db1d2e13&quot;,&quot;data&quot;:{&quot;state&quot;:{&quot;current_password&quot;:&quot;&quot;,&quot;password&quot;:&quot;&quot;,&quot;password_confirmation&quot;:&quot;&quot;}},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;5228445dc7b69b05160b17138de957289bf75d96e8c07592ccd10ca0e29fe0a5&quot;}}" class="row">
    <div class="col-md-4">
         <div class="px-4 px-sm-0">
    <h3 class="h5">Update Password</h3>

    <p class="mt-1 text-muted">
        Ensure your account is using a long, random password to stay secure.
    </p>
</div>
 
    </div>
    <div class="col-md-8">
        <div class="card shadow-sm">
            <form wire:submit.prevent="updatePassword">
                <div class="card-body">
                <div class="w-75">
            <div class="form-group">
                 <label for="current_password">
    Current Password
</label>
 
                 <input  class="form-control" id="current_password" type="password" wire:model.defer="state.current_password" autocomplete="current-password">
 
                  
            </div>

            <div class="form-group">
                 <label for="password">
    New Password
</label>
 
                 <input  class="form-control" id="password" type="password" wire:model.defer="state.password" autocomplete="new-password">
 
                  
            </div>

            <div class="form-group">
                 <label for="password_confirmation">
    Confirm Password
</label>
 
                 <input  class="form-control" id="password_confirmation" type="password" wire:model.defer="state.password_confirmation" autocomplete="new-password">
 
                  
            </div>
        </div>
                </div>

                                    <div class="card-footer d-flex justify-content-end">
                        <div x-data="{ shown: false, timeout: null }"
    x-init="window.livewire.find('CuPNjDiGCv1vZGfcnnK7').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
    x-show.transition.opacity.out.duration.1500ms="shown"
    style="display: none;"
    class="small mr-3">
    Saved.
</div>
 

         <button type="submit" class="btn btn-dark">
    Save
</button>
                    </div>
                            </form>
        </div>
    </div>
</div>
 
    
             <div class="py-3">
    <hr />
</div>
 

        <div wire:id="paaP5Z0FHhoErwla3nA8" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;paaP5Z0FHhoErwla3nA8&quot;,&quot;name&quot;:&quot;profile.two-factor-authentication-form&quot;,&quot;locale&quot;:&quot;en&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;a107a6ca&quot;,&quot;data&quot;:{&quot;showingQrCode&quot;:false,&quot;showingRecoveryCodes&quot;:false,&quot;confirmingPassword&quot;:false,&quot;confirmableId&quot;:null,&quot;confirmablePassword&quot;:&quot;&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;3fb5dd131557a558a2574554979b5e00c4372809363e27a7cc9cdefab369475f&quot;}}" class="row">
    <div class="col-md-4">
         <div class="px-4 px-sm-0">
    <h3 class="h5">Two Factor Authentication</h3>

    <p class="mt-1 text-muted">
        Add additional security to your account using two factor authentication.
    </p>
</div>
 
    </div>
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="h5 font-weight-bold">
                            You have not enabled two factor authentication.
                    </h3>

        <div class="mt-3">
            <p>
                When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone&#039;s Google Authenticator application.
            </p>
        </div>

        
        <div class="mt-3">
                             <span
    wire:then="enableTwoFactorAuthentication"
    x-data
    x-ref="span"
    wire:click="$emit('startConfirmingPassword', 'ab2d1de5297198533ed96f794eb99eac')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === 'ab2d1de5297198533ed96f794eb99eac' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);"
>
    <button type="button" class="btn btn-dark" wire:loading.attr="disabled">
    Enable
</button>
</span>

 <!-- Modal -->
<div wire:ignore.self class="modal fade" tabindex="-1" id="confirmingPasswordModal" aria-labelledby="confirmingPasswordModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Confirm Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            For your security, please confirm your password to continue.

        <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
             <input  class="form-control" type="password" placeholder="Password" x-ref="confirmable_password" wire:model.defer="confirmablePassword" wire:keydown.enter="confirmPassword">
 

              
        </div>
        </div>
        <div class="modal-footer bg-light">
            <button type="button" class="btn btn-outline-secondary" wire:click="stopConfirmingPassword" wire:loading.attr="disabled" data-dismiss="modal">
    Nevermind
</button>
 

         <button type="submit" class="btn btn-dark ml-2" wire:click="confirmPassword" wire:loading.attr="disabled">
    Confirm
</button>
        </div>
    </div>
    </div>
</div>
 
 

 
                    </div>
            </div>
        </div>
    </div>
</div>
     
     <div class="py-3">
    <hr />
</div>
 

    <div wire:id="YJ9oPGC9iuAiUHq1SpPa" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;YJ9oPGC9iuAiUHq1SpPa&quot;,&quot;name&quot;:&quot;profile.logout-other-browser-sessions-form&quot;,&quot;locale&quot;:&quot;en&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;99d2b6c2&quot;,&quot;data&quot;:{&quot;confirmingLogout&quot;:false,&quot;password&quot;:&quot;&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;04405381fe3a35a19a70ad14ac7c69ea7207079ac5d4f6bf54b8ec0229286b67&quot;}}" class="row">
    <div class="col-md-4">
         <div class="px-4 px-sm-0">
    <h3 class="h5">Browser Sessions</h3>

    <p class="mt-1 text-muted">
        Manage and logout your active sessions on other browsers and devices.
    </p>
</div>
 
    </div>
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <div>
            If necessary, you may logout of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.
        </div>

                    <div class="mt-3">
                <!-- Other Browser Sessions -->
                                    <div class="d-flex">
                        <div>
                                                            <svg fill="none" width="32" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="text-muted">
                                    <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                                    </div>

                        <div class="ml-2">
                            <div>
                                Windows - Firefox
                            </div>

                            <div>
                                <div class="small font-weight-lighter text-muted">
                                    127.0.0.1,

                                                                            <span class="text-success font-weight-bold">This device</span>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                            </div>
        
        <div class="d-flex mt-3">
             <button type="submit" class="btn btn-dark" wire:click="$emit('confirmLogout')" wire:loading.attr="disabled">
    Logout Other Browser Sessions
</button>
 

             <div x-data="{ shown: false, timeout: null }"
    x-init="window.livewire.find('YJ9oPGC9iuAiUHq1SpPa').on('loggedOut', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
    x-show.transition.opacity.out.duration.1500ms="shown"
    style="display: none;"
    class="small ml-3">
    Done.
</div>
 
        </div>

        <!-- Logout Other Devices Confirmation Modal -->
         <!-- Modal -->
<div wire:ignore.self class="modal fade" tabindex="-1" id="confirmingLogoutModal" aria-labelledby="confirmingLogoutModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Logout Other Browser Sessions</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Please enter your password to confirm you would like to logout of your other browser sessions across all of your devices.

                <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                     <input  class="form-control" type="password" placeholder="Password" x-ref="password" wire:model.defer="password" wire:keydown.enter="logoutOtherBrowserSessions">
 

                      
                </div>
        </div>
        <div class="modal-footer bg-light">
            <button type="button" class="btn btn-outline-secondary" wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled" data-dismiss="modal">
    Nevermind
</button>
 

                 <button type="submit" class="btn btn-dark ml-2" wire:click="logoutOtherBrowserSessions" wire:loading.attr="disabled" data-dismiss="modal">
    Logout Other Browser Sessions
</button>
        </div>
    </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>
 

     <div class="py-3">
    <hr />
</div>
 

    <div wire:id="PWc4YJTdcjspwwqKNh8p" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;PWc4YJTdcjspwwqKNh8p&quot;,&quot;name&quot;:&quot;profile.delete-user-form&quot;,&quot;locale&quot;:&quot;en&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;deee8821&quot;,&quot;data&quot;:{&quot;confirmingUserDeletion&quot;:false,&quot;password&quot;:&quot;&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;e5097bd632c0a1e6797f41bf3bc57845afc2d4bf4d93deae26fe3f0311ea9c29&quot;}}" class="row">
    <div class="col-md-4">
         <div class="px-4 px-sm-0">
    <h3 class="h5">Delete Account</h3>

    <p class="mt-1 text-muted">
        Permanently delete your account.
    </p>
</div>
 
    </div>
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <div>
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
        </div>

        <div class="mt-3">
             <button type="button" class="btn btn-danger" wire:click="$emit('confirmingUserDeletion')" wire:loading.attr="disabled">
    Delete Account
</button>
 
        </div>

        <!-- Delete User Confirmation Modal -->
         <!-- Modal -->
<div wire:ignore.self class="modal fade" tabindex="-1" id="confirmingUserDeletionModal" aria-labelledby="confirmingUserDeletionModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Delete Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.

                <div class="mt-4 w-75" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                     <input  class="form-control" type="password" placeholder="Password" x-ref="password" wire:model.defer="password" wire:keydown.enter="deleteUser">
 

                      
                </div>
        </div>
        <div class="modal-footer bg-light">
            <button type="button" class="btn btn-outline-secondary" wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled" data-dismiss="modal">
    Nevermind
</button>
 

                 <button type="button" class="btn btn-danger" wire:click="deleteUser" wire:loading.attr="disabled" data-dismiss="modal">
    Delete Account
</button>
        </div>
    </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>
                            </div>

                                                    </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b><a href="https://jetstream.laravel.com">Jetstream</a></b>
                </div>
                <strong>Powered by</strong> <a href="https://adminlte.io">AdminLTE</a>
            </footer>
        </div>

        
        <script src="/js/app.js"></script>
        <script src="/js/admin-lte.js"></script>
        <!-- Livewire Scripts -->

<script src="/livewire/livewire.js?id=47106843fef8f260f7e5" data-turbolinks-eval="false"></script>
<script data-turbolinks-eval="false">
    if (window.livewire) {
        console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
    }

    window.livewire = new Livewire();
    window.Livewire = window.livewire;
    window.livewire_app_url = '';
    window.livewire_token = 'EJXGmEIJL4cmfltwETpa6EQHv0nxhKMKfoVXCtkK';

    /* Make sure Livewire loads first. */
    if (window.Alpine) {
        /* Defer showing the warning so it doesn't get buried under downstream errors. */
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(() => {
                console.warn(`Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.

 Reference docs for more info: http://laravel-livewire.com/docs/alpine-js`)
            })
        });
    }

    /* Make Alpine wait until Livewire is finished rendering to do its thing. */
    window.deferLoadingAlpine = function (callback) {
        window.addEventListener('livewire:load', function () {
            callback();
        });
    };

    document.addEventListener("DOMContentLoaded", function () {
        window.livewire.start();
    });
</script>
            <script>
        let modal = new Bootstrap.Modal(document.getElementById('confirmingPasswordModal'))

        window.addEventListener('confirming-password', event => {
            modal.toggle()
        })
        window.addEventListener('password-confirmed', event => {
            modal.hide()
        })

        Livewire.on('startConfirmingPassword', (id) => {
            window.livewire.find('paaP5Z0FHhoErwla3nA8').startConfirmingPassword(id)
            modal.hide()
        })
    </script>
        <script>
            Livewire.on('confirmLogout', () => {
                new Bootstrap.Modal(document.getElementById('confirmingLogoutModal')).toggle()
            })
        </script>
            <script>
            Livewire.on('confirmingUserDeletion', () => {
                window.livewire.find('PWc4YJTdcjspwwqKNh8p').confirmUserDeletion()
                new Bootstrap.Modal(document.getElementById('confirmingUserDeletionModal')).toggle()
            })
        </script>
        </body>
</html>
 
<html>