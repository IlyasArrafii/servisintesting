@include('admin.layout.header')


<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Admin</h1>
        </div>
    </section>
    <a href="addadmin.php" class="btn btn-success mb-3">Add Admin</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><a href="editadmin.php" class="btn btn-warning">Edit</a> <a href="delete.php" class="btn btn-danger">Delete</a></td>
            </tr>
        </tbody>
    </table>

</div>

@include('admin.layout.footer')
