<div class="modal fade" id="add_vacancy" tabindex="-1" role="dialog" aria-labelledby="add_vacancy" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content rounded">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLongTitle">Add Vacancy</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body admin">
                <!-- form -->
                <form action="{{ url('/add_vacancy') }}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label>Heading:</label>
                        <input type="text" name="heading" class="form-control" id="heading" placeholder="Enter heading" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label>Position:</label>
                        <input type="text" class="form-control" name="position" placeholder="Enter position" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label>Salary:</label>
                        <input type="text" class="form-control" name="salary" placeholder="Enter salary" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="urgent" value="1">
                            Urgent
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="part_time" value="1">
                            Part time
                        </label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn-add px-5"> Add </button>
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>