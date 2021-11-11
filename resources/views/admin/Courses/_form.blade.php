<div class="col-md-6">
 <div class="form-group">
     <label for="c_name">Name</label>
        <input type="text" name="name" id="c_name" class="form-control">
 </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="c_fees">fees</label>
           <input type="text" name="fee" id="c_fees" class="form-control">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="c_overview">Overview</label>
        <textarea name="overview" id="c_overview" cols="30" rows="10" class="form-control"></textarea>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="c_requirement">Requirement</label>
        <textarea name="requirement" id="c_requirement" cols="30" rows="10" class="form-control"></textarea>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="c_requirement">Fees Detail</label>
        <textarea name="fees" id="c_requirement" cols="30" rows="10" class="form-control"></textarea>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="c_requirement">Subject</label>
        <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category" name="subject">
            <optgroup label="Categories">
                <option value="accounting">Accounting</option>
                <option value="art_and_design">Art and Design</option>
                <option value="business">Business</option>
                <option value="computing_and_it">Computing and IT</option>
                <option value="economics">Economics</option>
                <option value="engineering">Engineering</option>
                <option value="english_language">English Language</option>
                <option value="exam_preparation_english_course">Exam Preparation English Course</option>
                <option value="humanities-and-social-science">Humanities and Social Science</option>
                <option value="law">Law</option>
                <option value="life-science">Life Science</option>
                <option value="management">Management</option>
                <option value="marketing">Marketing</option>
                <option value="mathematics-and-statistics">Mathematics and Statistics</option>
                <option value="media">Media</option>
                <option value="medical">Medical</option>
                <option value="other-courses">Other Courses</option>
                <option value="science">Science</option>
                <option value="senior-secondary-high-school">Senior Secondary High School</option>
                <option value="social-science">Social Science</option>
                <option value="education">Education</option>
                <option value="cultural-studies">Cultural Studies</option>
                <option value="sports-and-nutrition">Sports and Nutrition</option>
                <option value="applied-science">Applied Science</option>
            </optgroup>
        </select>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="c_laval">Laval</label>
        <select class="form-control select2-show-search border-bottom-0" data-placeholder="Programme Level" name="level">
            <optgroup label="Categories">
                <option value="a_level">A Level</option>
                <option value="english_language_preparation">English Language Preparation</option>
                <option value="foundation">Foundation</option>
                <option value="high_school">High School</option>
                <option value="international_year_one">International year one</option>
                <option value="postgraduate">Postgraduate</option>
                <option value="postgraduate_research">Postgraduate Research</option>
                <option value="pre-dba">Pre-DBA</option>
                <option value="pre-masters">Pre-Masters</option>
                <option value="undergraduate">Undergraduate</option>
                <option value="certificate">Certificate</option>
                <option value="diploma">Diploma</option>
            </optgroup>
        </select>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="c_destination">Destination</label>
        <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Destination" name="destination">
            <optgroup label="Destination">
                <option value="united_kingdom">United Kingdom </option>
                <option value="new_zealand">New Zealand </option>
                <option value="united_state_of_america">United State of America </option>
                <option value="europe">Europe</option>
                <option value="australia">Australia </option>
                <option value="malaysia">Malaysia </option>
                <option value="china">China </option>
                <option value="germany">Germany </option>
                <option value="canada">Canada </option>
                <option value="ireland">Ireland </option>
                <option value="france">France </option>
                <option value="hungary">Hungary </option>
                <option value="cyprus">Cyprus </option>
                <option value="united_arab_emirates">United Arab Emirates </option>
                <option value="grenada">Grenada </option>
            </optgroup>
        </select>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="c_university_id">University</label>
        <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select University" name="university_id">
            <optgroup label="University">
                @foreach ($uni as $item)
                    <option value="{{ $item->id}}">{{ $item->name }} </option>
                @endforeach
            </optgroup>
        </select>
    </div>
</div>



