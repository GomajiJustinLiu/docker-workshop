const express = require('express');

const socket = require('socket.io');
const PORT = 2021;
app = express();
const server = app.listen(PORT, function () {
    console.log(`Listening on port ${PORT}`);
    console.log(`http://localhost:${PORT}`);
});

app.get('/', function(req, res) {
    let nickName = req.query.name;
    let message = req.query.message;
    console.log(`${nickName} send ${message}`)
    io.sockets.emit('new_message', {
        name: nickName,
        msg: message,
    });
    res.send('OK');
});

const io = socket(server);

io.on('connection', function(socket) {
    console.log(`new connection ${socket.id}`)
    socket.on('disconnect', function(data) {
        console.log(`disconnect ${socket.id}`)
    });

});


