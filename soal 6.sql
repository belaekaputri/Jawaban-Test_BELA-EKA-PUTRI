SELECT posts.title, posts.content, users.username, comments.comment
FROM posts, users, comments
WHERE posts.createdBy = users.id
AND comments.postId = posts.id