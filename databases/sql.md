# JWT Interview Questions and Answers 🚀

## 1. What is the difference between WHERE and HAVING?
**Answer :** The core difference is that WHERE  filter rows before data is grouped, while HAVING filter rows after data is grouped by a GROUP BY clause.
| Feature | WHERE | HAVING |
| :--- | :--- | :--- |
| Execution Order | Execute before GROUP BY | Execute after GROUP BY |
| Applies To | Individual rows of data | Aggregated groups of rows |
| Aggregate Functions | Cannot contain aggregate functions (e.g., SUM(), COUNT(), AVG()). | Can contain and filter by aggregate functions. |
| Usage | Used with or without a GROUP BY clause. | Almost always requires a GROUP BY clause. |

## 2. Can we use HAVING without GROUP BY clause?
**Answer :** Yes, we can use HAVING without GROUP BY clause.
However, doing so behaves in a very specific way: the database treats the entire table as single, unified group.

When we use HAVING without GROUP BY, we must use an aggregate function (like COUNT(), SUM(), AVG(), MIN(), or MAX()) in either the SELECT or HAVING clause.

The query will evaluate the condition against the summary data of the entire table:
* If the condition is true, the query returns exactly one row (the summary).
* If the condition is false, the query returns zero rows.

## 1. What is ACID Properties in sql?
**Answer :**
| Property | What it Means | How SQL Inforces It | Example 
| :--- | :--- | :--- | :--- |
| Atomicity | All or Nothing. Either every SQL statement in a transaction succeeds, or the entire transaction is cancelled (rolled back). Partial executions are impossible. | Managed using BEGIN TRANSACTION, COMMIT, and ROLLBACK commands. | If $100 is deducted from Account A, but the system crashes before adding it to Account B, the $100 is returned to Account A.
| Consistency | Valid State to Valid State. A transaction can only take the database from one valid state to another, strictly following all database rules and constraints. | Enforced through database constraints like PRIMARY KEY, FOREIGN KEY, CHECK, and NOT NULL. | If Account A has a rule saying its balance cannot drop below $0, a transaction attempting to withdraw more than the total balance will fail and reject the change.
| Isolation | Independence. Multiple transactions can execute concurrently without interfering with each other. The database acts as if transactions occur one after another. | Handled via locking mechanisms and Isolation Levels (e.g., Read Committed, Serializable) to prevent read errors. | If two people try to book the last remaining concert ticket at the exact same millisecond, the database isolates the actions so only one transaction succeeds, preventing double-booking.
| Durability | Permanence. Once a transaction is successfully completed (COMMIT), the changes are permanently saved in non-volatile memory. | Maintained using a Write-Ahead Log (WAL) or transaction logs that record changes to the disk before confirming success. | As soon as you see a "Transfer Successful" screen, those changes will not be lost even if the entire database server suddenly loses power or crashes right after.
