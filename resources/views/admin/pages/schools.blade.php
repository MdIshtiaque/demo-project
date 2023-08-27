@extends('admin.master')

@push('css')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="head d-flex justify-content-between">

        <h6 class="mb-0 text-uppercase">School List</h6>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary px-5 radius-30" data-bs-toggle="modal"
            data-bs-target="#exampleVerticallycenteredModal">Add New School</button>
    </div>
    <!-- Modal -->
    @include('admin.pages.modals.add-school')
    <hr>
    <div class="card mt-5">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>EIIN no</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Division</th>
                            <th>District</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schools as $info)
                            <tr>
                                <td>{{ $info->eiin }}</td>
                                <td>{{ $info->name }}</td>
                                <td>{{ $info->contact }}</td>
                                <td>{{ $info->division->name }}</td>
                                <td>{{ $info->district->name }}</td>
                                <td>{{ $info->address }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                selectedDivision: '',
                selectedDistrict: '',
                districts: []
            },
            methods: {
                fetchDistricts() {
                    if (this.selectedDivision) {
                        axios.get(`/api/divisions/${this.selectedDivision}/districts`)
                            .then(response => {
                                this.districts = response.data;
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    } else {
                        this.districts = [];
                    }
                    this.selectedDistrict = '';
                }
            }
        });
    </script>
    <script src="assets/js/form-validation.js"></script>
@endpush
