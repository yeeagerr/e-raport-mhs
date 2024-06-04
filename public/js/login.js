const autoFillout = () => {
    const username = document.querySelector(".username");
    const pass = document.querySelector(".password");
    document.querySelector(".username1").addEventListener("keyup", (e) => {
        username.value = e.target.value;
    });
    document.querySelector(".password1").addEventListener("keyup", (e) => {
        pass.value = e.target.value;
    });
};

autoFillout();
