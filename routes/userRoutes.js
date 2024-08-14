// routes/userRoutes.js
const express = require("express");
const userController = require("../controllers/userController");

const router = express.Router();

router.get("/user2", userController.getAllUsers);
router.post("/user2", userController.createUser);
router.post('/user2/:id/delete', userController.deleteUser);
router.post('/user2/:id/rename', userController.renameUser);

module.exports = router;
