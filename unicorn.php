<?php
    $identity = isset($_GET['identity']) ? $_GET['identity'] : '';
    $gifUrl = $identity == 'human' ? 'https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExejBrcTZmbHVzeXhxc3VvMGlrYmxmN3UxaWlkMHRqYmd2ZnRwbmZuaCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/l46Cj9QLmsgtR3qsU/giphy.gif' :
            ($identity == 'cat' ? 'https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExdWp4OHViMnFsb2ExbHNrY2ppMDh4d2ltZ2VwYTNlNjZhZjJmY2plZSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/VbnUQpnihPSIgIXuZv/giphy.gif' :
                      'https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExeHBxNXE1NjhmcmcxZDYwZXRtamc1Z3F6MWhjb3VtZHZsZW85d3YxZyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/j0kQJxo5mzGYb4EvWK/giphy.gif');
?>

<form action="" method="get">
        <label>
            <input type="radio" name="identity" value="human" required> Human
        </label>
        <label>
            <input type="radio" name="identity" value="cat"> Cat
        </label>
        <label>
            <input type="radio" name="identity" value="unicorn"> Unicorn
        </label>
        <br><br>
        <button type="submit">Submit</button>
</form>
<div>
        <img src="<?php echo $gifUrl;?>">
</div>

