<?php 
class ShareModel extends Model
{
    public function Index() {
        $this->query('SELECT * FROM shares ORDER BY create_date DESC');
        $rows = $this->resultSet();
        return $rows;
    }
    
    public function add() {
      // Sanitize POST
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      if($post['submit']) {
        if($post['title'] == '' || $post['body'] == '' || $post['link'] == '' ) {
            Messages::setMsg('Please Fill in all fields.','error');
            return;
        }
        // Insert into MySQL
        $this->query('INSERT INTO shares (title, body, link, user_id, create_date) VALUES (:title, :body, :link, :user_id, :create_date)');
            $user_id = $_SESSION['user_data']['id'];
            $date = date('Y-m-d H:i:s');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id', $user_id);
            $this->bind(':create_date', $date);
            $this->execute();
            //Verify 
            if($this->lastInsertId()) {
                // Redirect 
                header('Location: '.ROOT_URL.'shares');
            }
        } #if post submit ended  
      return;
    } # add function ended
}
