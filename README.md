 LA10 — Subject Lookup Table

 G1
I turned the `is_active` column into a `statuses` lookup table. I chose this column because it contains fixed, repeating values (Active/Inactive) that could expand later (e.g., Pending, Archived). Other columns like `code`, `title`, or `units` are unique or descriptive and do not represent shared categories.

 G2
Screenshot 6 showed **10 queries**. This happened because every row in the list performed a separate query to look up its related status — 1 query to fetch all subjects plus 9 separate queries (one for each subject's status). This is the N+1 query problem.

G3
If I named the method `statuses()` in plural instead of singular `status()`, Eloquent would automatically search for a foreign key column named `statuses_id` which does not exist in my table. The relationship would fail and throw an error because it cannot find the expected column.