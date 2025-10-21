<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>C++ STL Tutorial: Unordered Set</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Style only the code area */
    .code-container {
      position: relative;
      background: linear-gradient(135deg, #0d324d, #1a2a6c, #b21f1f, #fdbb2d);
      animation: gradientBG 15s ease infinite;
      border-radius: 20px;
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255,255,255,0.3);
      box-shadow: 0 8px 32px rgba(0,0,0,0.37);
      padding: 30px;
      color: #e0e0e0;
      margin-top: 20px;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .code-container h1 {
      margin-top: 0;
      font-size: 24px;
      color: #fff;
      text-shadow: 0 1px 4px rgba(0,0,0,0.5);
    }

    .code-box {
      max-height: 360px;
      overflow: auto;
      white-space: pre-wrap;
      font-size: 15px;
      line-height: 1.5;
      position: relative;
      padding-right: 10px;
    }

    .code-box::-webkit-scrollbar {
      width: 8px;
    }
    .code-box::-webkit-scrollbar-track {
      background: rgba(255,255,255,0.1);
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
      box-shadow: 0 0 15px rgba(0,255,255,0.6);
      transition: transform 0.2s, box-shadow 0.2s;
      backdrop-filter: blur(10px);
    }

    .copy-btn:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px rgba(0,255,255,0.9);
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
        <h1><strong>Unordered-set in C++ STL</strong></h1>

        <h2><strong>What is an unordered set?</strong></h2>
        <p>
          An unordered set in <strong style="color:red;"><u>STL</u></strong> is a container that stores unique elements in no particular order.
          Every operation on an unordered set takes <strong>O(1)</strong> on average and <strong>O(n)</strong> in the worst case.
        </p>

        <h3><strong>Syntax:</strong></h3>
        <div class="code-block">unordered_set&lt;object_type&gt; variable_name;</div>

        <h3><strong>Example:</strong></h3>
        <div class="code-block">
unordered_set&lt;int&gt; s;
unordered_set&lt;string&gt; str;
        </div>

        <h3><strong>Functions in unordered set:</strong></h3>
        <ul>
          <li><code><b>insert()</b></code> - insert an element:
            <div class="code-block">
unordered_set&lt;int&gt; s;
s.insert(1);
s.insert(2);
            </div>
          </li>
          <li><code><b>begin()</b></code> - iterator to first element: <div class="code-block">s.begin();</div></li>
          <li><code><b>end()</b></code> - iterator to past-the-last: <div class="code-block">s.end();</div></li>
          <li><code><b>count()</b></code> - returns 1 if exists, else 0:
            <div class="code-block">
unordered_set&lt;int&gt; s;
s.insert(2);
s.count(2); // true
            </div>
          </li>
          <li><code><b>clear()</b></code> - delete all elements: <div class="code-block">s.clear();</div></li>
          <li><code><b>find()</b></code> - search for element:
            <div class="code-block">
if(s.find(2)!=s.end()) cout &lt;&lt; "Found";
            </div>
          </li>
          <li><code><b>erase()</b></code> - delete element: <div class="code-block">s.erase(2);</div></li>
          <li><code><b>size()</b></code> - number of elements: <div class="code-block">s.size();</div></li>
          <li><code><b>empty()</b></code> - check if empty: <div class="code-block">s.empty();</div></li>
        </ul>

        <div class="code-container">
          <h1>Unordered Set in C++ STL</h1>
          <button class="copy-btn" onclick="copyCode()">Copy</button>
          <div class="code-box" id="codeBlock">
#include &lt;bits/stdc++.h&gt;
using namespace std;

int main() {
  unordered_set&lt;int&gt; s;

  <span class="comment">// Insert elements into the unordered set</span>
  for (int i = 1; i &lt;= 10; i++) {
    s.insert(i);
  }

  <span class="comment">// Display elements</span>
  cout &lt;&lt; "Elements: ";
  for (auto it = s.begin(); it != s.end(); it++) {
    cout &lt;&lt; *it &lt;&lt; " ";
  }
  cout &lt;&lt; endl;

  <span class="comment">// Find an element</span>
  int n = 2;
  if (s.find(n) != s.end())
    cout &lt;&lt; n &lt;&lt; " is present" &lt;&lt; endl;

  <span class="comment">// Erase first element</span>
  s.erase(s.begin());

  <span class="comment">// Display after deletion</span>
  cout &lt;&lt; "After erase: ";
  for (auto it : s)
    cout &lt;&lt; it &lt;&lt; " ";
  cout &lt;&lt; endl;

  <span class="comment">// Size check</span>
  cout &lt;&lt; "Size: " &lt;&lt; s.size() &lt;&lt; endl;

  <span class="comment">// Empty check</span>
  cout &lt;&lt; (s.empty() ? "Empty" : "Not Empty") &lt;&lt; endl;

  s.clear();
  cout &lt;&lt; "Size after clear: " &lt;&lt; s.size() &lt;&lt; endl;
}
          <div>
      <h5><strong>Output:</strong></h5>
        <div>Elements present in the unordered set: 10 9 8 7 2 1 3 4 5 6</div>
        <div>2 is present in unordered set</div>
        <div>Elements after deleting the first element: 9 8 7 2 1 3 4 5 6</div>
        <div>The size of the unordered set is: 9</div>
        <div>The unordered set is not empty</div>
        <div>Size of the unordered set after clearing all the elements: 0</div>
    </div>
          </div>
        </div>
          <div style="margin-top:20px;">
        <h3><strong>Other functions:</strong></h3>
        <ul>
          <li style="margin-bottom:5px;"> <strong>cbegin()</strong> – it refers to the first element of the unordered set.</li>
          <li style="margin-bottom:5px;"><strong>cend()</strong> – it refers to the theoretical element after the last element of the unordered set.</li>
          <li style="margin-bottom:5px;"><strong>bucket_size()</strong> - gives the total number of elements present in a specific bucket in an unordered set.</li>
          <li style="margin-bottom:5px;"><strong>emplace()</strong> - to insert an element in the unordered set.</li>
          <li style="margin-bottom:5px;"><strong>max_size()</strong> - the maximum elements an unordered_set can hold.</li>
          <li style="margin-bottom:5px;"><strong>max_bucket_count()</strong> - to check the maximum number of buckets an unordered set can hold.</li>
        </ul>
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
