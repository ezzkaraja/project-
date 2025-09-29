// Show modal



document.querySelectorAll('[data-target]').forEach(el => {
    el.onclick = (e) => {
        e.preventDefault();
        let target = el.dataset.target;
        document.querySelector('#' + target).classList.remove('hidden');

    }
});
document.querySelectorAll(['.close']).forEach(el => {
    el.onclick = (e) => {
        el.closest('.modal').classList.add('hidden');
    }
});
document.querySelectorAll(['.modal']).forEach(el => {
    el.onclick = (e) => {
        el.classList.add('hidden');
    }
});
document.querySelectorAll(['.modal .content']).forEach(el => {
    el.onclick = (e) => {
        e.stopPropagation();
    }
});
//add new course
document.querySelector("#add-new-course form").onsubmit = (e) => {
    e.preventDefault();
    let form = document.querySelector("#add-new-course form");
    let url = form.action;
    let data = new FormData(form);
    axios.post(url, data)
        .then((res) => {
            document.querySelector("#add-new-course ").classList.add("hidden");
            document.querySelector(".table-content").innerHTML = res.data.data;
            Swal.fire({
                title: "Good job!",
                text: res.data.msg,
                icon: "success"
            });

        }).catch((err) => {
            let error_massage = "";
            for (error in err.response.data.errors) {
                error_massage += '<P>' + err.response.data.errors[error][0] + '</P>';
                console.log(err.response.data.errors[error][0]);
            }
            document.querySelector(".alert-error").innerHTML = error_massage;
            document.querySelector(".alert-error").classList.remove("hidden");
        });
}
//pagination
document.querySelectorAll(".pagination a").forEach(el => {
    el.onclick = (e) => {
        e.preventDefault();
        let url = el.href;
        axios.get(url)
            .then((res) => {
                document.querySelector(".table-content").innerHTML = res.data.data;
            }
            ).catch((err) => {
                console.log(err);
            }
            );
    }
}
);
//felter
document.querySelector("#filter-form").onsubmit = (e) => {
    e.preventDefault();
    let form = document.querySelector("#filter-form");
    let url = form.action;
    let data = new FormData(form);
    axios.post(url, data)
        .then((res) => {
            document.querySelector(".table-content").innerHTML = res.data.data;
        }
        ).catch((err) => {
            console.log(err);
        }
        );
}
