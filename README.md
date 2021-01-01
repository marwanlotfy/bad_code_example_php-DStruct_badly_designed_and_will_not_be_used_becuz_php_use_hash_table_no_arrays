# php-datastruct

This Another Bad Code Example for how i am screw things up 

becase here we made the logic is so fuckin tightly coupled 

and this a good opportunity to refactor things 

i need to extract the logic that defers and made it reusable 

we need to take out the linkedlist class to make it sign contract that contain addTostart and addToEnd and addToindex Facade Function for the two past functions 

see its simple to screw things up 

but after refactoring we can encpsulate the logic of linked list as strategy tada 

yeah strategy beacuse we encapsulate the algorithim inside this class 

and its interface should be straight forword 

and the consumer of this class like Our Stack class it doesn't give a shit about how linked list store data in it 

just give me a damn container to store my valueeeeeeesssssss

yeah and then we can easily replace our class 

because we are a good developer and inject the service class at runtime rather than hard code it while instantian 

oh wait we are not good developer we are so bad and we screw things up 

but wait after we inject it we will depend on functionanlity not implementation details inside our consumer 
which is Stack  because we didn't care who the fuck is care about how things work inside the linked list 

and we can easily replace linked list by array strategy 

tadadaaaaaaaaaaaaa

and this array should implements the same interface 


but wait 
is it done. 


noooooooooo 

we love to reuse code because i am so lazy to write the same shitty code twice and do damn refactoring 

thats the power of startegy pattern 

because now we will develop some code for queue and will use the same contracts tadaaaaaaa

half of code is aleardy written man 

how cool is that 

and i will not write the code beacuse i am lazy 
