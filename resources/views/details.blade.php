<form action="user-details" method="post">
        @csrf
    <div>
        <h5>User Skill</h5>
        <input type="checkbox" name="skill[]" value="PHP" id="php"/>
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="Python" id="python"/>
        <label for="python">Python</label>
        <input type="checkbox" name="skill[]" value="Java" id="Java"/>
        <label for="Java">Java</label>
    </div>
    <div>
        <h5>Gender</h5>
        <input type = "radio" name="gender" value="male" id="male"/>
        <label for="male">Male</label>
        <input type = "radio" name="gender" value="female" id="female"/>
        <label for="female">Female</label>
    </div>

    <div>
        <h5>City</h5>
        <select name="city" id="city">
            <option value="Ktm">Kathmandu</option>
            <option value="lalitpur">lalitpur</option>
            <option value="BKT">Bhaktapur</option>
        </select>
    </div>
    <div>
    <h5>Age</h5>
    <input type="range" min="18" max="100" value="age" name="age"/>
    </div>
    <button type="submit">Submit</button>

</form>
