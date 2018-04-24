namespace php StringSwap
# 
# Create NAMESPACE 
#  
# 
# 



// Exceptions
//
/**
 * An IOError exception signals that an error occurred communicating
 * to the StringSwap master or an StringSwap region server.  Also used to return
 * more general StringSwap error conditions.
 */
exception IOError {
  1:string message
}

/**
 * An IllegalArgument exception indicates an illegal or invalid
 * argument was passed into a procedure.
 */
exception IllegalArgument {
  1:string message
}


// swap function we need to define
service StringSwap {

  string swap(1:string textToSwap) , 
  void ping() 
  

}