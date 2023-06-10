<p align="center"><a href="http://phplaravel-988638-3584494.cloudwaysapps.com/home" target="_blank">Inkwell Library Demo</a></p>

## About the Project
Explore the Inkwell Library demo project—a meticulously crafted web application designed to enhance the library management process for both customers and administrators. This project showcases my expertise in creating seamless user experiences and implementing robust features.

## User Guide
<ul>
    <li><p><strong>Homepage</strong></p></li>
    <ul>
        <li><p>Scroll through the homepage to view all the popular books, upcoming events, and other benefits the Inkwell Library can bring you</p></li>
    </ul>
    <li><p><strong>Catalog</strong></p></li>
    <ul>
        <li><p>Browse the extensive catalog to find whichever books may interest you</p></li>
        <li><p>Click on the preview button to quickly view more details on each book including the author, summary, and ISBN</p></li>
        <li><p>Click on the book title or image to view all of the details on the individual book</p></li>
        <ul>
            <li><p>Optionally add the book to your cart, then continue browsing or checkout your order</p></li>
        </ul>
    </ul>
    <li><p><strong>Events !! In Progress !!</strong></p></li>
    <ul>
        <li><p>Browse three highlighted upcoming events closest to the current date</p></li>
        <li><p>Browse an extensive list of events hosted by the library</p></li>
        <ul>
            <li><p>Optionally click on 'View Event Details' to view a more extensive event details page</p></li>
            <li><p>Optionally click on 'Reserve Your Spot' while logged in to reserve your spot in one click</p></li>
        </ul>
    </ul>
    <li><p><strong>Cart</strong></p></li>
    <ul>
        <li>After adding your favorite books to your cart, click the cart icon located on the right of the top navigation bar to access your cart</li>
        <li>Review the items in your cart & remove any books you no longer want to order</li>
        <li>Click the 'Place Your Order' button to automatically order and track all of the books in your cart</li>
        <ul>
            <li>If a book has become unavailable by the time you check-out, it will be automatically removed from your order and you will be notified once the order has completed processing</li>
        </ul>
    </ul>
    <li><p><strong>Profile</strong></p></li>
    <ul>
        <li><p><strong>Home</strong></p></li>
        <ul>
            <li><p>View the stored name, email, and pin number for your account</p></li>
        </ul>
        <li><p><strong>Orders</strong></p></li>
        <ul>
            <li><p>This is the main dashboard for managing all of your active orders</p></li>
            <li><p><strong>Important data</strong></p></li>
            <ul>
                <li>Book Information</li>
                <ul>
                    <li>Title, Author, ISBN, Summary, Publisher, Published Date, and Book Image</li>
                    <li>Utilized for order verification and order tracking</li>
                </ul>
                <li>Order Information</li>
                <ul>
                    <li>Order ID, Pickup Date, and Due Date</li>
                    <li>Utilized for order verification and order tracking</li>
                    <li>If a book is overdue, the amount of days overdue and total fees due are displayed along with a quick link to the fees management page</li>
                </ul>
            </ul>
        </ul>
        <li><p><strong>History</strong></p></li>
        <ul>
            <li><p>This is the main dashboard for managing all of your past orders</p></li>
            <li><p><strong>Important data</strong></p></li>
            <ul>
                <li>Book Information</li>
                <ul>
                    <li>Title, Author, ISBN, Summary, and Book Image</li>
                    <li>Utilized for order verification and order tracking</li>
                </ul>
                <li>Order Information</li>
                <ul>
                    <li>Order ID, Due Date, Checked In Date, and Total Accrued Fees</li>
                    <li>Utilized for order verification and order tracking</li>
                    <li>If a book has a payment history, a quick link button will be displayed to view more extensive details on the payment history</li>
                </ul>
            </ul>
        </ul>
        <li><p><strong>Fees</strong></p></li>
        <ul>
            <li><p>This is the main dashboard for managing all of your current and past fees</p></li>
            <li><p><strong>Fees Information</strong></p></li>
            <ul>
                <li>Fees are accumulated by $0.25 per overdue day</li>
                <li>Fees may be paid before the book is checked in online, however fees will continue accumulating until the book has been returned</li>
                <li>It is recommended to pay fees in the full amount due, however they may also be made in separate payments</li>
                <li>Payment Information and Billing Details are required unless the user is an administrator, in which case they have permissions to accept cash payments</li>
            </ul>
            <li><p><strong>Unpaid Fees</strong></p></li>
            <ul>
                <li>Book Information Summary, Order Information Summary, and Fee summary for tracking purposes</li>
                <li>A quick link button to pay fees online</li>
            </ul>
            <li><p><strong>Payment History</strong></p></li>
            <ul>
                <li>A compiled list of all payments made toward due fees</li>
                <li>A short summary containing important details pertaining to the fee payment</li>
                <li>A button activating a modal overlay containing all details pertaining to the fee payment</li>
            </ul>
        </ul>
    </ul>
    <li><p><strong>Administrator Dashboard</strong></p></li>
    <ul>
        <li><p><strong>Check In</strong></p></li>
        <ul>
            <li><p>View a summary of the book details, customer details, and order details of each active order</p></li>
            <li><p>One click check-in if the order has no fees associated with it</p></li>
            <li><p>A quick link button to accept cash if the order has fees associated with it</p></li>
        </ul>
        <li><p><strong>Manage Catalog</strong></p></li>
        <ul>
            <li><p>View the entire catalog in a responsive, simple grid system</p></li>
            <li><p>Click on a book to access the administrative view of the book</p></li>
            <li><p>Edit any of the form fields, pre-filled with the current data for ease of use, and click save to update the book data</p></li>
            <ul>
                <li>Adding a book image is recommended, but not required.  If a book has no image, it will default to a placeholder image</li>
            </ul>
        </ul>
        <li><p><strong>New Book</strong></p></li>
        <ul>
            <li><p>Fill all of the form fields in correspondance to their labels</p></li>
            <li><p>Adding a book image is recommended, but not required.  If a book has no image, it will default to a placeholder image</p></li>
            <li><p>Click the submit button to save the new book to the active catalog</p></li>
        </ul>
        <li><p><strong>Manage Orders</strong></p></li>
        <ul>
            <li><p>View a summary of all previous orders to assist with user inquiries</p></li>
        </ul>
    </ul>
    
</ul>

## Database Design
<img src="http://phplaravel-988638-3584494.cloudwaysapps.com/images/documentation/LibraryDBArchitecture.png"></img>
