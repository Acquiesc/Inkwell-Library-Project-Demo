@extends ('layouts.admin')

@section('content')

<div class="container">
    <div class="row mt-5 mb-3">
        <div class="col text-center">
            <h1 class="fw-bold">Check-In</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-12 mb-3">
            <h3 class="text-center">Search By User</h3>
            <label for="pin_search" class="form-label">Search by Pin</label>
            <input class="form-control" id="pin_search" name="pin_search" placeholder="Search by pin...">
            <select id="userPinSearchDropdown" class="form-select userQuery" size="5" style="display: none; overflow-x: scroll;">
            
            </select>
        </div>

        <div class="col-12 mb-3">
            <label for="name_search" class="form-label">Search by Name</label>
            <input class="form-control" id="name_search" name="name_search" placeholder="Search by name...">
            <select id="userNameSearchDropdown" class="form-select userQuery" size="5" style="display: none;">
            
            </select>
        </div>

        <div class="col-12 mb-5">
            <label for="email_search" class="form-label">Search by Email</label>
            <input class="form-control" id="email_search" name="email_search" placeholder="Search by email...">
            <select id="userEmailSearchDropdown" class="form-select userQuery" size="5" style="display: none;">
            
            </select>
        </div>

        <div class="col-12 mb-3 text-center" id="selectedUser" style="display: none;">
            <div class="container p-0">
                <div class="row">
                    <div class="col">
                        <h4>Selected User</h4>
                        <p><strong>Name: </strong><span id="selectedName"></span></p>
                        <p><strong>Pin: </strong><span id="selectedPin"></span></p>
                        <p><strong>Email: </strong><span id="selectedEmail"></span></p>
                    </div>
                </div>
            </div>
            <a href="#" id="viewUserBtn" class="btn btn-primary">View User Orders</a>
        </div>

        <script>
                const selectedUser = $('#selectedUser');
                const selectedName = $('#selectedName');
                const selectedPin = $('#selectedPin');
                const selectedEmail = $('#selectedEmail');
                const viewUserBtn = $('#viewUserBtn');

                $(document).on('click', function(event) {
                    var target = $(event.target);

                    var parentElemClasses = target.parent().attr('class').split(' ');

                    if(target.is('option') && parentElemClasses.indexOf('userQuery') === 1) {
                        var value = target.val();
                        $.ajax({
                        url: '/admin/users/search/get',
                        method: 'GET',
                        data: { user_id: value },
                        success: function(response) {
                            var user = response;
                            
                            selectedName.text(user.name);
                            selectedPin.text(user.pin);
                            selectedEmail.text(user.email);
                            let link = '/admin/orders/user/' + user.id;
                            viewUserBtn.attr('href', link);
                            
                            selectedUser.show();
                        },
                        error: function(error) {
                            console.error(error);
                        }
                    });
                    }
                });
        </script>

        <script>
            function toggleDropdown(inputId, dropdownId, searchUrl) {
                var input = $('#' + inputId);
                var dropdown = $('#' + dropdownId);
                
                $(document).on('click', function(event) {
                    var target = $(event.target);
                    
                    if (!target.closest(dropdown).length && !target.is(input)) {
                        dropdown.hide();
                    } else {
                        dropdown.show();
                    }
                });
                
                input.on('input', function(event) {
                    var searchTerm = event.target.value;
                    
                    $.ajax({
                        url: searchUrl,
                        method: 'GET',
                        data: { searchTerm: searchTerm },
                        success: function(response) {
                            var users = response;
                            
                            dropdown.empty();
                            
                            dropdown.append($('<option>').addClass('mb-2 fw-bold').text('Select a user').attr('disabled', 'disabled').val('none'));
                            
                            users.forEach(function(user) {
                                let userInfo = user.pin + " | " + user.name + " | " +  user.email;
                                dropdown.append($('<option>').addClass('mb-2').html(userInfo).val(user.id));
                            });
                            
                            dropdown.show();
                        },
                        error: function(error) {
                            console.error(error);
                        }
                    });
                });
            }
            
            // Call the initializeDropdown function for each dropdown you want to initialize
            toggleDropdown('pin_search', 'userPinSearchDropdown', '/admin/users/search/pin');
            toggleDropdown('name_search', 'userNameSearchDropdown', '/admin/users/search/name');
            toggleDropdown('email_search', 'userEmailSearchDropdown', '/admin/users/search/email');
            toggleDropdown('order_id_search', 'orderIdSearchDropdown', '/admin/orders/search/id');
        </script>
    </div>
    </div>
</div>

@endsection