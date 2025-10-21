<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vector in C++ STL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Style only the code area */
    .code-container {
      position: relative;
      background: linear-gradient(135deg, #0d324d, #1a2a6c, #b21f1f, #fdbb2d);
      animation: gradientBG 15s ease infinite;
      border-radius: 20px;
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
      padding: 30px;
      color: #e0e0e0;
      margin-top: 20px;
    }

    @keyframes gradientBG {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .code-container h1 {
      margin-top: 0;
      font-size: 24px;
      color: #fff;
      text-shadow: 0 1px 4px rgba(0, 0, 0, 0.5);
    }

    .code-box {
      max-height: 360px;
      overflow: auto;
      white-space: pre-wrap;
      font-size: 15px;
      line-height: 1;
      position: relative;
      padding-right: 10px;
    }

    .code-box::-webkit-scrollbar {
      width: 8px;
    }

    .code-box::-webkit-scrollbar-track {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 4px;
    }

    .code-box::-webkit-scrollbar-thumb {
      background: rgba(0, 255, 255, 0.6);
      border-radius: 4px;
    }

    .code-box::-webkit-scrollbar-thumb:hover {
      background: rgba(0, 255, 255, 0.8);
    }

    .copy-btn {
      position: absolute;
      top: 20px;
      right: 20px;
      background: linear-gradient(45deg, #00ffff, #0077ff);
      border: none;
      color: #fff;
      padding: 8px 16px;
      border-radius: 12px;
      font-size: 13px;
      cursor: pointer;
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.6);
      transition: transform 0.2s, box-shadow 0.2s;
      backdrop-filter: blur(10px);
    }

    .copy-btn:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px rgba(0, 255, 255, 0.9);
      background: linear-gradient(45deg, #0077ff, #00ffff);
    }

    .comment {
      color: #6fcf97;
    }

    .code-block {
      background-color: #f4f4f4;
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 10px;
      font-family: monospace;
      white-space: pre-line;
    }

    b {
      font-size: 17px;
      color: #212121;
    }
  </style>
</head>

<body class="bg-light py-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-3 p-3 border-end">
        <b>Sabbir</b>
      </div>
      <div class="col-8">
        <h1><strong>Vector in C++ STL</strong></h1>

        <h2><strong>What is a Vector?</strong></h2>
        <p>
          Vectors in <strong style="color:red;"><u>STL</u></strong> are basically dynamic arrays that have the ability
          to change size whenever elements are added or deleted from them. Vector elements can be easily accessed and
          traversed using iterators. A vector stores elements in contiguous memory locations.
        </p>

        <h3><strong>Syntax:</strong></h3>
        <div class="code-block">vector&lt;object_type&gt; variable_name;</div>

        <h3><strong>Example:</strong></h3>
        <div class="code-block">
          <div>
            vector&lt;int&gt; v1;
          </div>
          <div>
            vectorlt;char&gt; v2;
          </div>
          <div>
            vector&lt;string&gt; v3;
          </div>
        </div>


        <h3><strong>Most used functions in Vector:</strong></h3>
        <ul>
          <li><code><b>begin()</b></code> - it returns an iterator pointing to the first element of the vector.
            <div class="code-block">
              auto iterator = itr;
            </div>
            <div>
              itr = v1.begin();
            </div>
          </li>
          <li><code><b>end()</b></code> - it returns an iterator pointing to the element theoretically after the last
            element of the vector.</li>
          <div class="code-block">auto iterator = itr;</div>
          <div>itr = v1.end();</div>
          <li><code><b>push_back()</b></code> - it accepts a parameter and insert the element passed in the parameter in
            the vectors, the element is inserted at the end.</li>
          <div class="code-block">vector&lt;int&gt; v1;</div>
          <div class="code-block">
            <div>
              v1.push_back(1);
            </div>
            <div>
              v1.push_back(2);
            </div>
          </div>

          <li><code><b>insert()</b></code>- it is used to insert an element at a specified position.
            <div class="code-block">
              auto it= v1.begin();
            </div>
            <div class="code-block">
              v1.insert(it,5); //inserting 5 at the beginning
            </div>
          </li>
          <li><code><b>erase()</b></code> - it is used to delete a specific element<div class="code-block">
              <div>vector&lt;int&gt; v1;</div>
              <div>auto it= v1.begin();</div>
              <div>v1.erase(it);// erasing the first element</div>
            </div>
          </li>
          <li><code><b>pop_back() </b></code>- it deletes the last element and returns it to the calling function.
            <div class="code-block">
              v1.pop_back();
            </div>
          </li>

          <li><code><b>front()</b></code>- it returns a reference to the first element of the vector. <div
              class="code-block">v1.front();</div>
          </li>
          <li><code><b>back() </b></code> - it returns a reference to the last element of the vector.<div
              class="code-block">v1.back();</div>
          </li>
          <li><code><b>clear()</b></code> - deletes all the elements from the vector.<div class="code-block">v1.clear();
            </div>
          </li>
          <li><code><b>empty() </b></code> - to check if the vector is empty or not.<div class="code-block">v1.empty();
            </div>
          </li>
          <li><code><b>size() </b></code>- returns the size of the vector<div class="code-block">v1.size();</div>
          </li>
        </ul>
        <div class="code-container">
          <h1>Vector in C++ STL</h1>
          <button class="copy-btn" onclick="copyCode()">Copy</button>
          <div class="code-box" id="codeBlock">
            #include &lt;bits/stdc++.h&gt;<br>
            using namespace std;<br><br>

            int main() {<br>
            &nbsp;&nbsp;vector&lt;int&gt; v;<br><br>

            &nbsp;&nbsp;<span class="comment">// inserting elements in the vector</span><br>
            &nbsp;&nbsp;for (int i = 0; i &lt; 10; i++) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;v.push_back(i);<br>
            &nbsp;&nbsp;}<br><br>

            &nbsp;&nbsp;cout &lt;&lt; "the elements in the vector: ";<br>
            &nbsp;&nbsp;for (auto it = v.begin(); it != v.end(); it++)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; *it &lt;&lt; " ";<br><br>

            &nbsp;&nbsp;cout &lt;&lt; "\nThe front element of the vector: " &lt;&lt; v.front();<br>
            &nbsp;&nbsp;cout &lt;&lt; "\nThe last element of the vector: " &lt;&lt; v.back();<br>
            &nbsp;&nbsp;cout &lt;&lt; "\nThe size of the vector: " &lt;&lt; v.size();<br>
            &nbsp;&nbsp;cout &lt;&lt; "\nDeleting element from the end: " &lt;&lt; v[v.size() - 1];<br>
            &nbsp;&nbsp;v.pop_back();<br><br>

            &nbsp;&nbsp;cout &lt;&lt; "\nPrinting the vector after removing the last element:" &lt;&lt; endl;<br>
            &nbsp;&nbsp;for (int i = 0; i &lt; v.size(); i++)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; v[i] &lt;&lt; " ";<br><br>

            &nbsp;&nbsp;cout &lt;&lt; "\nInserting 5 at the beginning:" &lt;&lt; endl;<br>
            &nbsp;&nbsp;v.insert(v.begin(), 5);<br>
            &nbsp;&nbsp;cout &lt;&lt; "The first element is: " &lt;&lt; v[0] &lt;&lt; endl;<br>
            &nbsp;&nbsp;cout &lt;&lt; "Erasing the first element" &lt;&lt; endl;<br>
            &nbsp;&nbsp;v.erase(v.begin());<br>
            &nbsp;&nbsp;cout &lt;&lt; "Now the first element is: " &lt;&lt; v[0] &lt;&lt; endl;<br><br>

            &nbsp;&nbsp;if (v.empty())<br>
            &nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; "\nvector is empty";<br>
            &nbsp;&nbsp;else<br>
            &nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; "\nvector is not empty" &lt;&lt; endl;<br><br>

            &nbsp;&nbsp;v.clear();<br>
            &nbsp;&nbsp;cout &lt;&lt; "Size of the vector after clearing the vector: " &lt;&lt; v.size();<br>
            }
                   <div>
          <h5><strong>Output:</strong></h5>
          <div> The elements in the vector: 0 1 2 3 4 5 6 7 8 9</div>
          <div>The front element of the vector: 0</div>
          <div>The last element of the vector: 9</div>
          <div>The size of the vector: 10</div>
          <div>Deleting element from the end: 9</div>
          <div>Printing the vector after removing the last element:</div>
          <div>0 1 2 3 4 5 6 7 8</div>
          <div>Inserting 5 at the beginning:</div>
          <div>The first element is: 5</div>
          <div>Erasing the first element</div>
          <div>Now the first element is: 0</div>
          <div>vector is not empty</div>
          <div>Size of the vector after clearing the vector: 0</div>
        </div>
          </div>
        </div>

         <div style="margin-top:20px;">
      <h3><strong>Other functions:</strong></h3>
      <ul>
        <li style="margin-bottom:5px;"> <strong>cbegin()</strong> – it refers to the first element of the vector.</li>
        <li style="margin-bottom:5px;"><strong>cend()</strong> – it refers to the theoretical element after the last
          element of the vector.</li>
        <li style="margin-bottom:5px;"><strong>rbegin()</strong> - it points to the last element of the vector.</li>
        <li style="margin-bottom:5px;"><strong>rend()</strong> - it points to the theoretical element before the first
          element of the vector.</li>
        <li style="margin-bottom:5px;"><strong>crbegin()</strong> - it refers to the last element of the vector.</li>
        <li style="margin-bottom:5px;"><strong>crend()</strong> - it refers to the theoretical element before the first
          element of the vector.</li>
        <li style="margin-bottom:5px;"><strong>max_size()</strong> - returns the maximum size the vector can hold.</li>
        <li style="margin-bottom:5px;"><strong>capacity()</strong> - it returns the current capacity of the vector.</li>
      </ul>
    </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <script>
    function copyCode() {
      const el = document.createElement('textarea');
      el.value = document.getElementById('codeBlock').innerText;
      document.body.appendChild(el);
      el.select();
      document.execCommand('copy');
      document.body.removeChild(el);
      alert("Code copied!");
    }
  </script>
</body>

</html>