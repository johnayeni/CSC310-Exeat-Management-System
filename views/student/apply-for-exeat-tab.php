<form id="exeat-form">
  <div class="form-group">
    <label for="reason">Reason:</label>
    <textarea class="form-control" rows="6" name="reason" required></textarea>
  </div>
  <div class="form-group">
    <label for="type">Type:</label>
    <select name="type" class="form-control" required>
      <option value="home">Home</option>
      <option value="day">Day</option>
      <option value="bank">Bank</option>
    </select>
  </div>
  <div class="form-group">
    <label for="leave-date">Intended Depart Date:</label>
    <input type="date" name="leave-date" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="return-date">Intended Return Date:</label>
    <input type="date" name="return-date" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
