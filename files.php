<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter with Vue.js</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>
<body>

<div id="app"></div>

<script>
// Your Vue component
const FileInputComponent = {
  template: `
    <div>
      <h1>Input Type File</h1>
      <form @submit.prevent="registerAnswer">
        <label>Choose a file:
          <input @change="updateVal" type="file">
        </label>
        <button type="submit">Submit</button>
      </form>
      <div>
        <h3>Submitted answer:</h3>
        <p id="pAnswer">{{ inpValSubmitted }}</p>
      </div>
    </div>
  `,
  data() {
    return {
      fileInp: null,
      inpValSubmitted: 'Not submitted yet'
    }
  },
  methods: {
    registerAnswer() {
      if (this.fileInp) {
        this.inpValSubmitted = this.fileInp;
      }
    },
    updateVal(e) {
      this.fileInp = e.target.value;
    }
  }
};

// Create a new Vue instance
new Vue({
  el: '#app',
  components: {
    FileInputComponent
  },
  template: '<file-input-component></file-input-component>'
});
</script>

<style scoped>
  div {
    border: dashed black 1px;
    border-radius: 10px;
    padding: 0 20px 20px 20px;
    margin-top: 20px;
    display: inline-block;
  }
  button {
    margin: 10px;
    display: block;
  }
  #pAnswer {
    background-color: lightgreen;
    padding: 5px;
  }
</style>

</body>
</html>
