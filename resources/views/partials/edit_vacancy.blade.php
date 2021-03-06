<div class="modal fade" id="edit_vacancy{{ $vacancy->id }}" tabindex="-1" role="dialog" aria-labelledby="edit_vacancy{{ $vacancy->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content rounded">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLongTitle">Edit Vacancy</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body admin">
                <!-- form -->
                <form action="{{ url('/edit_vacancy/') }}/{{$vacancy->id}}" method="post">
                @csrf
                    <div class="form-group">
                    <label>Heading:</label>
                        <input type="text" name="heading" class="form-control" id="heading" value="{{ $vacancy->heading }}" placeholder="Enter heading" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                    <label>Position:</label>
                        <input type="text" class="form-control" name="position" placeholder="Enter position" value="{{ $vacancy->position }}"/>
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                    <label>Salary:</label>
                        <input type="text" class="form-control" name="salary" placeholder="Enter salary" value="{{ $vacancy->salary }}" />
                        <div class="validate"></div>
                    </div>

                    (checkboxes cannot be changed)
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="urgent" @if($vacancy->urgent) checked @endif >
                            Urgent
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="part_time" @if($vacancy->part_time) checked @endif >
                            Part time
                        </label>
                    </div>
                    <div class="text-center">
                        <button class="btn-add px-5" type="submit"> Add </button>
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>