<?php


class MessageManager
{
    protected $db;

    public function __construct($db) {
        $this->setDb($db);
    }

    protected function setDb($db) {
        $this->db=$db;
    }



    public function getMessage1() {

        
        $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 1  ');

        if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
  
    echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
} 
}
       
    }

    public function getMessage2() {

        
         $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 2  ');
       
       if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
   echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
} 
}



       
    }


public function getMessage3() {

        
        $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 3  ');
       
        if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
  echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
}  
}
       
    }


public function getMessage4() {

        
         $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 4  ');
       
      if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
   echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
}  
}
       
    }


public function getMessage5() {

        
        $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 5  ');
       
       if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
    echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
} 
}
       
    }


public function getMessage6() {

        
        $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 6  ');
       
       if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
   echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
} 
}

       
    }


public function getMessage7() {

        
        $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 7  ');
       
       if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
   echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
} 
}

       
    }


public function getMessage8() {

        
         $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 8  ');
       
       if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
    echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
} 
}
       
    }
       
    


public function getMessage9() {

        
         $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 9  ');
       
       if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
   echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
} 
}

       
    }


public function getMessage10() {

        
         $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 10  ');
       
       if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
   echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
} 
}
       
    }


public function getMessage11() {

        
        $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 11  ');
       
       if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
    echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
} 
}
       
    }


public function getMessage12() {

        
        $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 12  ');
       
       if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
   echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
} 
}

       
    }


public function getMessage13() {

        
         $message = [];
        
        $q = $this->db->query('SELECT dates,times,texts FROM mailbox WHERE  groupNumber = 13  ');
       
       if ($q->rowCount()==0) {
            echo '<br><h4 class="text-center">'."No messages for this group".'<h4>';
        } 
       else {
       while ($donnes = $q->fetch())
{
  echo '<div class="form-group">
            Sent on the  <label>' .($donnes['dates']).'</label> at <label>' .($donnes['times']).'</label><br>
            
            <textarea type="text" class="form-control" placeholder="Message" name="message">'. htmlspecialchars($donnes['texts']) .'</textarea></div><br><br>';
} 
}
       }
    }