<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input</title>
</head>
<body>
    <h2>Input Form</h2>
    
    <!-- Form Open dengan site_url() -->
    <?php echo form_open('forms/submit'); ?>

    <!-- Input Email -->
    <p>
        <?php 
            echo form_label('Email:', 'email'); 
            echo form_input([
                'type' => 'email',
                'name' => 'email',
                'id' => 'email',
                'required' => 'required'
            ]); 
        ?>
    </p>

    <!-- Input Password -->
    <p>
        <?php 
            echo form_label('Password:', 'password'); 
            echo form_password([
                'name' => 'password',
                'id' => 'password',
                'required' => 'required'
            ]); 
        ?>
    </p>

    <!-- Textarea Feedback -->
    <p>
        <?php 
            echo form_label('Feedback:', 'feedback'); 
            echo form_textarea([
                'name' => 'feedback',
                'id' => 'feedback',
                'required' => 'required'
            ]); 
        ?>
    </p>

    <!-- Select Dropdown -->
    <p>
        <?php 
            echo form_label('Gender:', 'gender'); 
            echo form_dropdown('gender', [
                '' => 'Select Gender',
                'male' => 'Male',
                'female' => 'Female',
                'other' => 'Other'
            ], '', [
                'id' => 'gender'
            ]);
        ?>
    </p>

    <!-- Radio Buttons -->
    <p>
        <?php 
            echo form_label('Subscribe to Newsletter:', 'subscribe'); 
            echo form_radio('subscribe', 'yes', FALSE, ['id' => 'subscribe_yes']);
            echo form_label('Yes', 'subscribe_yes');
            echo form_radio('subscribe', 'no', TRUE, ['id' => 'subscribe_no']);
            echo form_label('No', 'subscribe_no');
        ?>
    </p>

    <!-- Checkbox -->
    <p>
        <?php 
            echo form_label('Hobbies:', 'hobbies'); 
            echo form_checkbox('hobbies[]', 'reading', FALSE, ['id' => 'hobby_reading']);
            echo form_label('Reading', 'hobby_reading');
            echo form_checkbox('hobbies[]', 'traveling', FALSE, ['id' => 'hobby_traveling']);
            echo form_label('Traveling', 'hobby_traveling');
            echo form_checkbox('hobbies[]', 'sports', FALSE, ['id' => 'hobby_sports']);
            echo form_label('Sports', 'hobby_sports');
        ?>
    </p>

    <!-- Submit Button -->
    <p>
        <?php echo form_submit('submit', 'Submit'); ?>
    </p>

    <?php echo form_close(); ?>
</body>
</html>
