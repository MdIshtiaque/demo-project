<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header">
                <h5 class="modal-title">Add School</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="app" class="pt-5">
                <form action="{{ route('school.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-md-12">
                        <label for="bsValidation1" class="form-label">School Name</label>
                        <input type="text" name="name" class="form-control" id="bsValidation1" placeholder="School Name" required>
                    </div>
                    <div class="col-md-12">
                        <label for="bsValidation2" class="form-label">EIIN</label>
                        <input type="text" name="eiin" class="form-control" id="bsValidation2" placeholder="EIIN No" required>
                    </div>
                    <div class="col-md-12">
                        <label for="input3" class="form-label">Contact</label>
                        <input type="text" name="contact" class="form-control" id="input3" placeholder="Contact number" required>
                    </div>
                    <div class="col-md-6">
                        <label for="input7" class="form-label">Division</label>
                        <select name="division_id" v-model="selectedDivision" @change="fetchDistricts" class="form-select" required>
                            <option value="">Choose Division</option>
                            @foreach ($divisions as $division)
                                <option value="{{ $division->id }}">{{ $division->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="input7" class="form-label">District</label>
                        <select name="district_id" v-model="selectedDistrict" class="form-select" required>
                            <option value="">Choose District</option>
                            <option v-for="district in districts" :value="district.id">@{{ district.name }}</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="input11" class="form-label">Address</label>
                        <textarea name="address" class="form-control" id="input11" placeholder="Address ..." rows="3" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Submit</button>
                            <button type="reset" class="btn btn-light px-4">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
