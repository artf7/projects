#include <stdio.h>
// Include the user-defined header file for SQLite
#include "sqlite3.h"

// Define a static function that will be used as a callback
// This function takes four arguments: NotUsed, argc, argv, and azColName
static int callback(void *NotUsed, int argc, char **argv, char **azColName){ 
    int i;
    for(i=0; i<argc; i++){
      printf("%s = %s\n", azColName[i], argv[i] ? argv[i] : "NULL");
    }
    printf("\n");
    return 0;
  }
//Define the main function that will be executed when the program is run
// The function takes two arguments: argc and argv
// argc is the number of arguments passed to the program, and argv is an array
// of strings containing those arguments
  int main(int argc, char **argv){
    sqlite3 *db;
    char *zErrMsg = 0;
    int rc;
     // Check that the program was run with two arguments
    if( argc!=3 ){
      fprintf(stderr, "Usage: %s DATABASE SQL-STATEMENT\n", argv[0]);
      return(1);
    }
    // Attempt to open the specified database file
    rc = sqlite3_open(argv[1], &db);
    if( rc ){
      fprintf(stderr, "Can't open database: %s\n", sqlite3_errmsg(db));
      sqlite3_close(db);
      return(1);
    }
    // Execute the specified SQL statement, passing in the callback function
    rc = sqlite3_exec(db, argv[2], callback, 0, &zErrMsg);
     if( rc!=SQLITE_OK ){
      fprintf(stderr, "SQL error: %s\n", zErrMsg);
      sqlite3_free(zErrMsg);
    }
     // Close the database connection and return 0 to indicate success
    sqlite3_close(db);
    return 0;
  }