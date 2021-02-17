<?php
include 'config.php';
// Function to insert/add
function add($pdo, $table, $record)
{
  // Storing key of value in $key
  $key = array_keys($record);

  // Imploding array key with comma
  $value = implode(',', $key);

  // Imploding value with ': ,' for VALUES
  $valueWithColon = implode(', :', $record);

  $query = "INSERT INTO person ( $values ) VALUES (: $valuesWithColon ')";

  $stmt = $pdo->prepare($query);

  $stmt->execute($record);
}

// Function to update
function update($pdo, $table, $record, $primaryKey){
  $query = 'UPDATE '.$table.' SET ';

  $parameters = [];

  foreach ($record as $key => $value) {
    $parameters[] = $key .'= :'.$key;
  }

  $query .= implode(',', $parameters);
  $query .= ' WHERE ' .$primaryKey. ' = :primaryKey';

  $record['primaryKey'] = $primaryKey;

  $stmt = $pdo->prepare($query);
  $stmt->execute($record);

}

// Function to delete record
function delete($pdo, $table, $id)
{
  $query = 'DELETE FROM ' . $table . ' WHERE id = ' . $id ;
  $stmt = $pdo->prepare($query);
  $stmt->execute();
}

// Function to find single record
function find($pdo, $table, $field, $value){
  $stmt = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $field . ' = :value');
  $criteria = ['value' => $value];
  $stmt->execute($criteria);
  return $stmt->fetch();
}

// Function to find a group of $record
function findAll($pdo, $table)
{
  $query = 'SELECT * FROM ' . $table;
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  return $stmt->fetchAll();
}

// Function to save based on user Action
function save($pdo, $table, $record, $primaryKey)
{
  try{
    add($pdo, $table, $record);
  }
  catch(Exception $e){
    update($pdo, $table, $record, $primaryKey);
  }
}
 ?>
